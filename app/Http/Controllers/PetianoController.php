<?php

namespace App\Http\Controllers;

use App\User;
use View;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class PetianoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all petianos
        $petianos = User::all();
        // load the views and pass the petianos 
        return View::make('petianos.list')->with('petianos', $petianos);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (views/petianos/form.blade.php)
        return View::make('petianos.form');
    }

}