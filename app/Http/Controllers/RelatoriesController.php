<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\User;
use App\Participant;
use View;
use Session;

class RelatoriesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
         $petianos = User::all();
         $participantes = Participant::all();
         $activities = Activity::all();

        // return view('relatories/index', ['numUsers' => $numUsers]);

        return View::make('relatories/index')->with('petianos', $petianos)->with('participantes', $participantes)->with('activities', $activities);
    }
}
