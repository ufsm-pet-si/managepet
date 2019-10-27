<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $table = 'presence';
    
    public function subscription()
    {
        return $this->belongsTo('App\Subscription');
    }
}
