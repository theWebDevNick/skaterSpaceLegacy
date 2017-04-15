<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password', 'zip','is_coach','region','municipality','latitude','longitude','home_timezone','email_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'is_email_verified',
        'email_sent',
        'email_send_success',
        'date_of_birth',
        'email',
        'is_active',
        'home_club',
        'user_type'
    ];

    public function userType()
    {
        return $this->hasOne(user_types::class,'id','user_type')->select(['id','name']);
    }
    public function coachingDisciplines()
    {
        return $this
            ->belongsToMany(skating_disciplines::class,'skater_disciplines','skater_id','discipline_id')
            ->select('name','id')
            ->where('is_coaching',true);
    }
    //
    //
    public function skatingDisciplines()
    {
        return $this
            ->belongsToMany(skating_disciplines::class,'skater_disciplines','skater_id','discipline_id')
            ->select('name','id');
    }
    //
    //
    public function coachingCredentials()
    {
        return $this
            ->belongsToMany(skating_credentials::class,'skater_credentials','skater_id','credential_id')
            ->with('skatingLevel','grantingOrg','program')
            ->where([
                ['is_coaching_credential',true],
                ['show_on_profile',true]
            ]);
    }//
    public function club()
    {
        return $this->hasOne(skating_clubs::class,'id','home_club')->select('id','name','short_name');
    }

}
