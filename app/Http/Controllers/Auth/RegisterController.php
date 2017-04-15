<?php

namespace App\Http\Controllers\Auth;

use App\Mail\UserEmailValidation;
use App\skater_disciplines;
use App\skating_disciplines;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|min:6|confirmed',
            'zip'=>'required|regex:/\b\d{5}\b/',
            'is_coach'=>'required | boolean',
            'disciplines[]'=>'array',
            'coaching_disciplines[]'=>'array'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
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
        $name = "{$user->first_name} {$user->last_name}";
        $tokenRoute=route('verifyEmail',$token);
         Mail::to($user)->send(new UserEmailValidation($name,$tokenRoute));
        $user->email_sent = Carbon::now();
        $user->save();
        session()->flash('defaultMessage','Welcome to Skater.Space. Please check your email for an important verification message.');
        return $user;
    }

    /**
     * OVERRIDES THE showRegistrationFrom METHOD INHERITED FROM Illuminate\Foundation\Auth\RegistersUsers;
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $disciplines= skating_disciplines::all();
        return view('auth.register',['disciplines'=>$disciplines]);
    }
}
