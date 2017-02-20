<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skating_credentials extends Model
{
    //
    public function list_all()
    {

    }
    public static function skills($id)
    {

        return static::join('skating_credentials_skills','skating_credentials.id','skating_credentials_skills.credential_id')
            ->join('skating_skills','skating_skills.id','skating_credentials_skills.skill_id')
            ->orderBy('skating_credentials_skills.display_order')
            ->pluck('skating_skills.name','skating_skills.id');
    }
}
