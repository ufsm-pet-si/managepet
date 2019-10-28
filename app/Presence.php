<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $table = 'presences';
    protected $fillable = ['activity_day_id', 'participant_id', 'presence_mark'];
    
    public function subscription()
    {
        return $this->belongsTo('App\Subscription');
    }

    public function participant()
    {
        return $this->belongsTo('App\Participant');
    }

    public function activityDay()
    {
        return $this->belongsTo('App\ActivityDay');
    }
}
