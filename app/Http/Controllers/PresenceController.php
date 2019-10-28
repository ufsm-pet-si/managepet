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
            $presences = Presence::where('activity_day_id', '=', $day->id)->get();
            foreach($presences as $presence)
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
        $activityDays = ActivityDay::where('activity_id', '=', $request->activityId)->get();
        
        // get all presences for the target activity
        $allPresences = array();
        foreach ($activityDays as $activityDay)
            array_push($allPresences, Presence::where('activity_day_id', $activityDay->id)->get());

        $presenceIds = array();
        foreach ($allPresences as $daysPresences)
            foreach ($daysPresences as $dayPresence)
                $presenceIds[$dayPresence->activity_day_id . '_' . $dayPresence->participant_id] = $dayPresence;
        
        // for each instance coming from the input, check if it is in the array populated with the instances from database
        if (($inputPresences = $request->input('presences')) !== null) {
            foreach ($inputPresences as $inputPresence) {
                $presence = explode('_', $inputPresence);

                // if the instance is in the array, remove it from the array
                if (array_key_exists($inputPresence, $presenceIds)) {
                    unset($presenceIds[$inputPresence]);
                } else {
                    Presence::create([
                        'activity_day_id'  => $presence[0],
                        'participant_id'   => $presence[1],
                        'presence_mark'    => true
                    ]);
                }
            }

            // remaining records in the array will be deleted
            foreach ($presenceIds as $presenceId)
                $presenceId->delete();

            Session::flash('message', ['text'=>"Presenças gravadas com sucesso!", 'type'=>"success"]);
        } else {
            foreach($activityDays as $activityDay)
                Presence::where('activity_day_id', '=', $activityDay->id)->get()->each->delete();
            Session::flash('message', ['text'=>"Presenças removidas com sucesso!", 'type'=>"success"]);
        }
        
        // redirect
        return redirect()->route('atividades.index');
    }
}
