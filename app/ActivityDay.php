<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityDay extends Model
{
    protected $fillable = ['activity', 'date', 'start_hour', 'duration'];
}
