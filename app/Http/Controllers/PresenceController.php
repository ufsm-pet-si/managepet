<?php

namespace App\Http\Controllers;

use App\Subscription;
use View;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all subscription
        $subscription = Subscription::all();
        // load the views and pass the categories
        return View::make('presence.list')->with('subscription', $subscription);
    }
}
