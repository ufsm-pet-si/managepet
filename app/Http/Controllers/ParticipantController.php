<?php

namespace App\Http\Controllers;

use App\Participant;
use View;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ParticipantController extends Controller
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
        return View::make('participants.list')->with('participants', $participant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (views/participants/form.blade.php)
        return View::make('participants.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required',
        ]);

        // store
        Participant::create($request->all());

        // redirect
        Session::flash('message', ['text' => "Participante criado com sucesso!", 'type' => "success"]);
        return redirect()->route('participantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participant $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //Buscar participantes de $activity (id da atividade será enviado)
        $searchedParticipant = Participant::find($participant);

        // show the view and pass the nerd to it
        return View::make('participants.form')->with('participant', $searchedParticipant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the participant
        $searchedParticipant = Participant::find($id);

        // show the edit form and pass the participant
        return View::make('participants.form')->with('participant', $searchedParticipant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participant  $participante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participante)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required',
        ]);

        // store
        $participante->update($request->all());

        // redirect
        Session::flash('message', ['text' => "Participante atualizado com sucesso!", 'type' => "success"]);
        return redirect()->route('participantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participant  $participante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participante)
    {
        // delete
        $participante->delete();

        // redirect
        Session::flash('message', ['text' => "Participante removido com sucesso!", 'type' => "success"]);
        return redirect()->route('participantes.index');
    }
}
