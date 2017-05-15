<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoachSearchRequest;
use App\Http\Requests\UpdateMyBiographyRequest;
use App\Http\Requests\UpdateProfilePictureRequest;
use App\User;
use App\user_types;
use App\skater_achievements;
use App\skating_achievements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachController extends Controller
{
    //

    public function index()
    {
        //abbreviated list of coaches
          return User::with('coachingDisciplines')
          ->select('id','first_name','last_name','home_timezone','profile_pic_url','page_slug','zip')
          ->where([
              ['is_coach',true],
              ['is_active',true]
          ])
          ->paginate(20);
    }
    //
    public function search(CoachSearchRequest $request)
    {
        return User::with('coachingDisciplines')
            ->select('id','first_name','last_name','home_timezone','profile_pic_url','page_slug','zip')
            ->where([
                ['is_coach',true],
                ['is_active',true]
            ])
            ->paginate(20);
    }
    //
    public function getFullPageBiographyFromSlug($slug)
    {
         $coach= User::
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
         if ($coach)
         {
             return $coach;
         }
         else
         {
            return  abort(404);
         }
    }
    //
    public function getFullPageBiographyFromSlug_web($slug)
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

        return view('coachProfile',['coach'=>$coach]);
    }

    public function UpdateMyProfilePicture(UpdateProfilePictureRequest $request)
    {

        $user = User::find(Auth::user()->id);
        $user->profile_pic_url = $request->file('profile')->store('');
        $user->save();
        return response()->json(['profile_pic_url'=> $user->profile_pic_url]);
    }
    public function UpdateMyBiography(UpdateMyBiographyRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->bio = $request['biography'];
        $user->save();
        return response()->json(['success'=> 'Coach biography updated.']);

    }
}
