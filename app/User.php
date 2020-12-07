<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function phone()
    {
        return $this->hasOne('App\Phone', 'user_id', 'id');
    }

    public function reactions()
    {
        return $this->belongsToMany('App\Reaction', 'user_reaction', 'user_id', 'reaction_id');
    }
}

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// class User extends Authenticatable
// {
//     use Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'name', 'email', 'password',
//     ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */
//     protected $hidden = [
//         'password', 'remember_token',
//     ];

//     /**
//      * The attributes that should be cast to native types.
//      *
//      * @var array
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];

// }
