<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['title', 'speaker', 'description', 'category_id'];

    /**
     * Get the activity_days for the activity record.
     */
    public function activityDays()
    {
        return $this->hasMany('App\ActivityDay');
    }

    /**
     * Get the category that owns the activity record.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function participants()
    {
	return $this->hasMany('App\Participant');
    }

}
