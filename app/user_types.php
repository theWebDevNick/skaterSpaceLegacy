<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_types extends Model
{
    //
    public function users()
    {
        return $this->hasMany(User::class,'user_type');
    }
}
