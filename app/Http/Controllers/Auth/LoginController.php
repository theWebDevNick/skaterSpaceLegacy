<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     *
     * THIS OVERRIDES THE DEFAULT logout METHOD INHERITED FROM AuthenticatesUsers
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {

        //These three lines are the same as th default
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        //This is the different code
        session()->flash('defaultMessage','You have been logged out.');
        return redirect(route('login'));
    }

}
