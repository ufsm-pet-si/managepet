<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscription';
    protected $fillable = ['activity_id', 'participant_id'];
    
    public function activity()
    {
        return $this->belongsTo('App\Activity', 'activity_id');
    }
    
    public function participant()
    {
        return $this->belongsTo('App\Participant');
    }

    public function presence()
    {
        return $this->hasMany('App\Presence');
    }
}
