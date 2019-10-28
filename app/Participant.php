<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['name', 'type', 'email', 'matricula', 'instituition', 'curso'];
    
    public function subscriptions()
    {
        return $this->hasMany('App\Subscription');
    }

    public function presences()
    {
        return $this->hasMany('App\Presence');
    }
}
