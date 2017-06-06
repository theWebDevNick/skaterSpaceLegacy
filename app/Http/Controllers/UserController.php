<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\UserRegistrationThroughAPIRequest;
use App\Http\Requests\webAppLoginRequest;
use App\Mail\UserEmailValidation;
use App\skater_disciplines;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{

    use AuthenticatesUsers;

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
            'is_coach'=>$data['is_coach'],
            'password' => bcrypt($data['password']),
            'zip'=>$data['zip'],
            'email_token' =>$token
        );
        //
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

        //Generate Coach page slug, if they are a coach
        if($data['is_coach'])
        {//if coach
            $newUser['user_type']=2;
            $slug ="{$data['first_name']}_{$data['last_name']}";
            if (!empty($newUser['region']))
            {
                $slug.="_{$newUser['region']}";
            }
            //
            //Checks for page_slug collisions
            $count = User::where('page_slug','like',$slug.'%')->count();

            if ($count==0)
            {
                //no collisions
                $newUser['page_slug']=$slug;
            }
            else
            {
                //collisions
                $newUser['page_slug']=$slug.'_'.($count+1);
            }
        }
        else
        {
            //
            $newUser['user_type']=1;
        }

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
        $name = "{$user->first_name} {$user->last_name}";
        $tokenRoute=route('verifyEmail',$token);
        Mail::to($user)->send(new UserEmailValidation($name,$tokenRoute));
        $user->email_sent = Carbon::now();
        $user->save();
        $token = $user->createToken('register')->accessToken;
        return response()->json(['access_token'=>$token]);
    }
    //Users and overrrides the login method form AuthenticatesUsers
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        return $this->sendFailedLoginResponse($request);
    }

    //overrides the AuthenticatesUsers class
    protected function authenticated(Request $request, $user)
    {
        $token = $user->createToken('webAppAccess')->accessToken;
        return response()->json([
            'token' => $token,
            'user'=>$user
        ]);
    }

    public function getCurrentUserData()
    {
        return  auth()->user();
    }

    protected function sendLoginResponse(Request $request)
    {
        return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath());
    }
}
