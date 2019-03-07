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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation
        if ($validator->fails()) 
            return redirect()->route('petianos.create')->withErrors($validator);

        // store
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'), 
        ]);

        // redirect
        Session::flash('message', 'Petiano(a) criado(a) com sucesso!');
        return redirect()->route('petianos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petiano  $petiano
     * @return \Illuminate\Http\Response
     */
    public function show(User $petianos)
    {
        // get the category
        $searchedPetianos = User::find($petianos);

        // show the view and pass the nerd to it
        return View::make('petianos.form')->with('petianos', $searchedPetianos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petiano  $petiano
     * @return \Illuminate\Http\Response
     */
    public function destroy($petiano)
    {
        // delete
        $searchedUser = todo::find($petiano);
        $searchedUser->delete();
        // redirect
        Session::flash('message', 'Petiano(a) removido(a) com sucesso!');
        return redirect()->route('petianos.index');    
    }

}