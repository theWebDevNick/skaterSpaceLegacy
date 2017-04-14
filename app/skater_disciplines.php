<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skater_disciplines extends Model
{
    protected $fillable = ['skater_id','discipline_id','is_coaching'];
}
