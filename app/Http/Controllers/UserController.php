<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationThroughAPIRequest;
use App\Mail\UserEmailValidation;
use App\skater_disciplines;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{

    //
    public function verifyEmail(Request $request)
    {
        $user = User::where('email_token',$request->token)->first();
        if($user)
        {
            $user->is_email_verified=true;
            $user->save();
            $request->session()->flush();
            $request->session()->regenerate();
            session()->flash('defaultMessage','You have verified your email address. Please login again to continue');
            return redirect(route('login'));
        }
        else
        {
            session()->flash('errorMessage','We were unable to verify your email address.');
            return redirect(route('dashboard'));
        }
    }

    public function generateUserViaAPI(UserRegistrationThroughAPIRequest $data)
    {
        //create array to build user on
        $token =str_random(25);//not really a "token" per se---just need a hard-to-guess link for the email

        $newUser = array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'zip'=>$data['zip'],
            'is_coach'=>$data['is_coach'],
            'email_token' =>$token
        );
        //
        //Get location information
        $key=config('app.geocodioAPIKey');
        $gURL ="https://api.geocod.io/v1/geocode?postal_code={$data['zip']}&fields=timezone&api_key={$key}";


        //make Geocodio API call, suppress errors
        if($location=@json_decode(@file_get_contents($gURL)))
        {

            //if Geocodio API returns results, add them to the array

            //
            //gathers return data
            $region=!empty($location->results[0]->address_components->state) ? $location->results[0]->address_components->state:null;
            $municipality=!empty($location->results[0]->address_components->city) ? $location->results[0]->address_components->city:null;
            $lat=!empty($location->results[0]->location->lat) ? $location->results[0]->location->lat:null;
            $lng=!empty($location->results[0]->location->lng) ? $location->results[0]->location->lng:null;
            $timezone=!empty($location->results[0]->fields->timezone->name) ? $location->results[0]->fields->timezone->name:null;
            //
            //adds to array
            $newUser['region'] = $region;
            $newUser['municipality'] = $municipality;
            $newUser['latitude'] = $lat;
            $newUser['longitude'] = $lng;
            $newUser['home_timezone'] = $timezone;
        }//if Geocodio returned

        //create the user
        $user = User::create($newUser);//creates user
        //
        //Add the disciplines to the skater_disciplines table
        if (!empty($data['disciplines']))
        {
            foreach ($data['disciplines'] as $discipline)
            {
                if (!empty($data['coaching_disciplines']))
                {
                    $is_coaching=false;
                    foreach($data['coaching_disciplines'] as $coaching)
                    {
                        if ($coaching == $discipline)
                        {
                            $is_coaching=true;
                        }//if discipline matches a coaching discipline
                    }
                }
                else
                {
                    $is_coaching=false;
                }

                skater_disciplines::create([
                    'skater_id'=>$user->id,
                    'discipline_id'=>$discipline,
                    'is_coaching'=>$is_coaching
                ]);
            }
        }
        //
        //Now send email to welcome user and validate email
        /*$name = "{$user->first_name} {$user->last_name}";
        $tokenRoute=route('verifyEmail',$token);
        Mail::to($user)->send(new UserEmailValidation($name,$tokenRoute));
        $user->email_sent = Carbon::now();
        $user->save();*/
        $token = $user->createToken('register')->accessToken;
        return response()->json(['access_token'=>$token]);
    }
}
