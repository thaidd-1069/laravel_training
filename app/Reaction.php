<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_reaction', 'user_id', 'reaction_id');
    }
}
