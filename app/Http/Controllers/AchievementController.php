<?php

namespace App\Http\Controllers;

use App\skating_achievements;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AchievementController extends Controller
{
    //
    public function __construct()
    {
      //  $this->middleware('auth');
    }


    public function index()
    {//abbreviated list of all credentials. Does not include a individual skills
        return skating_achievements::with('program','skatingLevel','grantingOrg')->paginate(20);
    }
    //
    //
    public function getAchievementByID(skating_achievements $achievement)
    {
        return $achievement::with('skills','program','skatingLevel','grantingOrg')->get();
    }
    //
    //
    public function AchievementsThatAreCoachOnly()
    {
        return skating_achievements::with('program','skatingLevel','grantingOrg')
            ->where('is_coaching_credential',true)
            ->paginate(20);
    }
    public function listCoachesWithThisAchievement($achievement)
    {
        return User::select('id','first_name','last_name','home_timezone','profile_pic_url','page_slug','zip')
        ->whereHas('skatingAchievements',function($query) use ($achievement){
            $query->where('achievement_id', $achievement);
        })
        ->where('is_coach',true)
        ->paginate(20);
    }
}
