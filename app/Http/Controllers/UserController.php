<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


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
}
