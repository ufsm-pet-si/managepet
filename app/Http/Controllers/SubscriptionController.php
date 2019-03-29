<?php

namespace App\Http\Controllers;

use App\Participant;
use View;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $participant = Participant::all();
        // load the views and pass the participants
        return View::make('subscription.list')->with('participants', $participant);
    }
}
