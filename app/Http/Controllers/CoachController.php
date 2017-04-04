<?php

namespace App\Http\Controllers;

use App\User;
use App\user_types;
use App\skater_credentials;
use App\skating_credentials;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    //
    public function index()
    {
        //abbreviated list of coaches
      return
          User::with('coachingDisciplines')
          ->select('id','first_name','last_name','home_timezone','profile_pic_url','page_slug','zip')
          ->where([
              ['is_coach',true],
              ['is_active',true]
          ])
          ->get();
    }
    //
    public function searchCoaches($clubID)
    {

    }
    //
    public function getFullPageBiographyFromSlug($slug)
    {
         $coach = User::
            with('coachingDisciplines','coachingCredentials','club','userType')
             ->select(
                 'first_name',
                 'last_name',
                 'id',
                 'zip',
                 'home_timezone',
                 'bio',
                 'profile_pic_url',
                 'home_club',
                 'user_type'
             )
            ->where([
                ['page_slug',$slug],
                ['is_active',true]
            ])
            ->first();
        return $coach;
    }
}
