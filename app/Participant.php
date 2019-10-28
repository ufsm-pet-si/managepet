<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['name', 'type', 'email', 'matricula', 'instituition', 'curso'];
    
    public function subscriptions()
    {
        return $this->hasMany('App\Subscription', 'participant_id');
    }
}
