<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'search_center', 'type'];

    /**
     * Get the activities for the category record.
     */
    public function activities()
    {
        return $this->hasMany('App\Activity');
    }

}