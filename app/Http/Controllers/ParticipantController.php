<?php

namespace App\Http\Controllers;

use App\Participant;
use App\Activity;
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
        // load the views and pass the participants 
        return View::make('participants.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //Buscar participantes de $activity (id da atividade será enviado)
        $participants = [];

        // show the view and pass the nerd to it
        return View::make('participants.list')->with('participants', $participants);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (views/participants/form.blade.php)
        return View::make('participantes.form');
    }

}