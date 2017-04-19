<?php

namespace App\Http\Controllers;

use App\skating_achievements;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    //
    public function __construct()
    {
      //  $this->middleware('auth');
    }


    public function index()
    {//abbreviated list of all credentials. Does not include a individual skills
        return skating_achievements::with('program','skatingLevel','grantingOrg')->get();
    }
    //
    //
    public function getCredentialByIDWithSkills(skating_achievements $cred)
    {
        return $cred::with('skills','program','skatingLevel','grantingOrg')->get();
    }
}
