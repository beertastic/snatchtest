<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testUsers extends Model
{
    protected $fillable = ['username', 'password', 'email', 'phone'];

    public function position()
    {
        return $this->hasMany('App\testUserHistory', 'user_id', 'id');
    }

}
