<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function petianos_list(){
        return view('petianos/list');
    }
    public function petianos_form(){
        return view('petianos/form');
    }
    public function participants_list(){
        return view('participants/list');
    }
    public function participants_form(){
        return view('participants/form');
    }
    public function schedule(){
        return view('schedule/index');
    }
    public function certificates(){
        return view('certificates/index');
    }
}
