<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Category;
use View;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all activities
        $activities = Activity::all();
        // load the views and pass the activities
        // return view('activities.index', compact('activities'));
        return View::make('activities.list')->with('activities', $activities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get all categories
        $categories = Category::all();
        // load the create form (views/activities/form.blade.php)
        return View::make('activities.form')->with('categories', $categories);
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
            'titulo'    => 'required',
            'categoria' => 'required',
            'data' => 'required',
            'hora_inicio' => 'required',
            'duracao' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation
        if ($validator->fails()) 
            return redirect()->route('atividades.create')->withErrors($validator);

        // store
        Activity::create([
            'title'         => $request->input('titulo'),
            'description'   => $request->input('descricao'), 
            'category'      => $request->input('categoria'),
            'date'      => $request->input('data'),
            'start_time'      => $request->input('hora_inicio'),
            'duration'      => $request->input('duracao')
        ]);

        // redirect
        Session::flash('message', 'Atividade criada com sucesso!');
        return redirect()->route('atividades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        // get the activity
        $searchedActivity = Activity::find($activity);
        // get all categories
        $categories = Category::all();
        // load the create form (views/activities/form.blade.php)
        return View::make('activities.form')->with('categories', $categories, 'activity', $searchedActivity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        // get the activity
        $searchedActivity = Activity::find($activity);

        // show the edit form and pass the activity
        return View::make('activities.form')->with('activity', $searchedActivity);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        // validate
        $rules = array(
            'titulo'    => 'required',
            'categoria' => 'required',
            'data' => 'required',
            'hora_inicio' => 'required',
            'duracao' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation
        if ($validator->fails()) 
            return Redirect::to('atividades.edit', ['activity' => $activity])->withErrors($validator);
        
        // store
        Activity::create([
            'title'         => $request->input('titulo'),
            'description'   => $request->input('descricao'), 
            'category'      => $request->input('categoria'),
            'date'      => $request->input('data'),
            'start_time'      => $request->input('hora_inicio'),
            'duration'      => $request->input('duracao')
        ]);

        // redirect
        Session::flash('message', 'Atividade atualizada com sucesso!');
        return Redirect::to('atividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        // delete
        $searchedActivity = Activity::find($activity);
        $searchedActivity->delete();

        // redirect
        Session::flash('message', 'Atividade removida com sucesso!');
        return Redirect::to('atividades.index');  
    }

}