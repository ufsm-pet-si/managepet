<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscription';
    /**
     * Get the activities for the category record.
     */
    public function activities()
    {
        return $this->belongsTo('App\Activity');
    }

    /**
     * Get the activities for the category record.
     */
    public function presence()
    {
        return $this->hasMany('App\Presence');
    }
}
