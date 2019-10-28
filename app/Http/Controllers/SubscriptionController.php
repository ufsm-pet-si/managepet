<?php

namespace App\Http\Controllers;

use App\Participant;
use App\Subscription;
use App\Activity;
use View;
use Session;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $participants = Participant::all();
        $activityId = $request->activityId;
        $subscriptions = Subscription::where('activity_id', '=', $activityId)->get();
        $participantsSubscripted = array();
        foreach ($subscriptions as $subscription)
            array_push($participantsSubscripted, $subscription->participant_id);

        // load the views and pass the participants
        return View::make('subscription.list')
            ->with('participants', $participants)
            ->with('activityId', $activityId)
            ->with('participantsSubscripted', $participantsSubscripted);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activitySubscriptions = Subscription::where('activity_id', '=', $request->activityId)->get();
        if (($participantIds = $request->input('subscriptions')) !== null) {
            // delete subscriptions that were unmarked
            foreach($activitySubscriptions as $aSubscription) {
                if (!in_array($aSubscription->participant_id, $participantIds)) {
                    $aSubscription->delete();
                }
            }

            // store and/or update subscriptions marked
            foreach ($participantIds as $participantId) {
                // get participant subscription in the specific activity
                $participantSubscription = Subscription::where('participant_id', $participantId)->get();
                $participantSubscription = $participantSubscription->where('activity_id', $request->activityId)->first();

                // if the participant has no subscription stored in database, create a new one
                if (!$participantSubscription) {
                    Subscription::create([
                        'activity_id'   => $request->activityId,
                        'participant_id' => $participantId
                    ]);
                } else {
                    var_dump($participantSubscription);
                    $participantSubscription->update($request->all());
                }
            }
            Session::flash('message', ['text'=>"Participantes inscritos com sucesso!", 'type'=>"success"]);
        } else {
            // delete every subscription of the checkbox input array comes empty (null)
            $activitySubscriptions->each->delete();
            Session::flash('message', ['text'=>"Inscrições removidas com sucesso!", 'type'=>"success"]);
        }
        
        // redirect
        return redirect()->route('atividades.index');
    }
}
