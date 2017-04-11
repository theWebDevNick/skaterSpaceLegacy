<?php

namespace App\Http\Controllers\Auth;

use App\skating_disciplines;
use App\User;
use App\Http\Controllers\Controller;
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
        $gURL ="https://api.geocod.io/v1/geocode?postal_code={$data['zip']}&fields=timezone&api_key={config('app.geocodioAPIKey')}";
        if($location=json_decode(file_get_contents($gURL)))
        {
            $region=!empty($location->results[0]->address_components->state) ? $location->results[0]->address_components->state:null;
            $municipality=!empty($location->results[0]->address_components->city) ? $location->results[0]->address_components->city:null;
            $lat=!empty($location->results[0]->location->lat) ? $location->results[0]->location->lat:null;
            $lng=!empty($location->results[0]->location->lng) ? $location->results[0]->location->lng:null;
            $timezone=!empty($location->results[0]->fields->timezone->name) ? $location->results[0]->fields->timezone->name:null;
        }
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),

        ]);
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
