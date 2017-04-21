<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skating_achievements extends Model
{
    protected $hidden = array('pivot','created_at','updated_at','is_active');

    //
    public function skills()
    {
        return $this->belongsToMany(skating_skills::class,'skating_achievement_skills','achievement_id','skill_id')->select(['skating_skills.id','name','resource_url']);
    }
    public function skaterAchievements()
    {
        return $this->belongsToMany(User::class,'skater_achievements','achievement_id','user_id');

    }
    public function program()
    {
        return $this->hasOne(skating_programs::class,'id','program_id')->select(['id','name']);
    }
    public function skatingLevel()
    {
        return $this->hasOne(skating_levels::class,'id','skating_level')->select(['id','name']);
    }
    public function grantingOrg()
    {
        return $this->hasOne(governing_organizations::class,'id','granting_org')->select(['id','name']);
    }
}
