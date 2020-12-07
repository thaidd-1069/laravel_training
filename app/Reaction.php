<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_reaction', 'reaction_id', 'user_id');
    }
}
