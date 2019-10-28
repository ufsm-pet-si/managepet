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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($activityId, $participantId)
    {
        var_dump('kkkk');
        // load the create form (views/categories/form.blade.php)
        return View::make('categories.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participantIds = $request->input('subscriptions');
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
                if ($participant = Subscription::where('participant_id', '=', $participantId)->first()) {
                    $participant->update($request->all());
                } else {
                    Subscription::create([
                        'activity_id'   => $request->activityId,
                        'participant_id' => $participantId
                    ]);
                }
            }
            Session::flash('message', ['text'=>"Participantes inscritos com sucesso!", 'type'=>"success"]);
        } else {
            // delete every subscription of the checkbox input array comes empty (null)
            $activitySubscriptions->delete();
            Session::flash('message', ['text'=>"Inscrições removidas com sucesso!", 'type'=>"success"]);
        }
        
        // redirect
        return redirect()->route('atividades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($participantId, $activityId)
    {
        // get the category
        // $searchedCategory = Category::find($category)->first();

        // show the view and pass the category to it
        return "it sux $participantId - $activityId";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the category
        $searchedCategory = Category::find($id);

        // show the edit form and pass the category
        return View::make('categories.form')->with('category', $searchedCategory);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'          => 'required',
            'search_center' => 'required',
            'type'          => 'required'
        ]);

        // store
        $category->update($request->all());

        // redirect
        Session::flash('message', ['text'=>"Categoria atualizada com sucesso!", 'type'=>"success"]);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // delete
        $category->delete();

        // redirect
        Session::flash('message', ['text'=>"Categoria removida com sucesso!", 'type'=>"success"]);
        return redirect()->route('categories.index');
    }
}
