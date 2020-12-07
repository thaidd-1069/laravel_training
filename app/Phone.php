<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function user()
    {
        return $this->belongTo('App\User', 'phone_id', 'id'); //add column phone_id to users table to run this code
    }
}
