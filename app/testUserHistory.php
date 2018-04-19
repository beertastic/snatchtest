<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testUserHistory extends Model
{
    protected $fillable = ['user_id', 'long', 'lat'];
}
