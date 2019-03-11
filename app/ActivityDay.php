<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityDay extends Model
{
    protected $fillable = ['activity_id', 'date', 'start_hour', 'duration'];

    /**
     * Get the activity that owns the activityDay record.
     */
    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }

}
