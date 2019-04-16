<?php

namespace App\Http\Controllers;

use App\User;
use View;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

         // store
        User::create([
            'name' => $request->input('name'),
            'pet' => $request->input('pet'),            
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'type' => $request->input('type'),
        ]);

        // redirect
        Session::flash('message', ['text'=>"Petiano(a) criada com sucesso!", 'type'=>"success"]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petiano  $petiano
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the user
        $searchedUser = User::find($id);

        // show the edit form and pass the petiano
        return View::make('petianos.form')->with('petiano', $searchedUser);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petiano  $petiano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $petiano)
    {
        // validate
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $petiano->update([
            'name' => $request->input('name'),
            'pet' => $request->input('pet'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'type' => $request->input('type'),
        ]);

        // redirect
        Session::flash('message', ['text'=>"Petiano(a) atualizado com sucesso!", 'type'=>"success"]);
        return redirect()->route('petianos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petiano  $petiano
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $petiano)
    {
        // delete
        $petiano->delete();
        // redirect
        Session::flash('message', ['text'=>"Petiano(a) removido com sucesso!", 'type'=>"success"]);
        return redirect()->route('petianos.index');    
    }

}