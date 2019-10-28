<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\ActivityDay;
use App\Participant;
use App\Presence;
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
    public function index(Request $request)
    {
        // get all subscription
        $subscriptions = Subscription::where('activity_id', '=', $request->activityId)->get();
        $activityDays = ActivityDay::where('activity_id', '=', $request->activityId)->get();
        $participants = array();
        foreach ($subscriptions as $subscription) {
            array_push($participants, Participant::where('id', '=', $subscription->participant_id)->first());
        }
        
        $participantsPresences = array();
        foreach($activityDays as $day) {
            $presence = Presence::where('activity_day_id', '=', $day->id)->first();
            if ($presence)
                array_push($participantsPresences, $presence->activity_day_id . '_' . $presence->participant_id);
        }

        // load views and pass information to populate it
        return View::make('presence.list')
            ->with('participants', $participants)
            ->with('activityDays', $activityDays)
            ->with('activityId', $request->activityId)
            ->with('participantsPresences', $participantsPresences);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store
        foreach ($request->input('presences') as $presence) {
            $presence = explode('_', $presence);
            Presence::create([
                'activity_day_id'  => $presence[0],
                'participant_id'   => $presence[1],
                'presence_mark'    => true
            ]);
        }
        
        // redirect
        Session::flash('message', ['text'=>"Presenças gravadas com sucesso!", 'type'=>"success"]);
        return redirect()->route('presence.index', ['activityId' => $request->activityId]);
    }
}
