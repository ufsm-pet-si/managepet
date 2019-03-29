<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $table = 'presence';
    /**
     * Get the activities for the category record.
     */
    public function subscription()
    {
        return $this->belongsTo('App\Subscription');
    }
}
