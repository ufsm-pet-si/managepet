<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscription';
    
    public function activities()
    {
        return $this->belongsTo('App\Activity');
    }
    
    public function participants()
    {
        return $this->belongsTo('App\Participant');
    }

    public function presence()
    {
        return $this->hasMany('App\Presence');
    }
}
