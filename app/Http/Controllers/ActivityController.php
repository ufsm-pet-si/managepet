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
            'title'         => Input::get('titulo'),
            'description'   => Input::get('descricao'), 
            'category'      => Input::get('categoria'),
            'date'      => Input::get('data'),
            'start_time'      => Input::get('hora_inicio'),
            'duration'      => Input::get('duracao')
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
        $searchedActivity = Activity::find($activity)->first();
        // get all categories
        $categories = Category::all();
        // load the edit form (views/activities/form.blade.php)
        return View::make('activities.form')->with('categories', $categories, 'activity', $searchedActivity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the activity
        $searchedActivity = Activity::find($id)->first();
        // get all categories
        $categories = Category::all();
        // load the edit form (views/activities/form.blade.php)
        return View::make('activities.form')->with('activity', $searchedActivity)->with('categories', $categories); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update($id)
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
            return Redirect::to('activities.form', ['activity' => $activity])->withErrors($validator);
        
        // store
        $activity = Activity::find($id);

        $activity->title = Input::get('titulo');
        $activity->description = Input::get('descricao');
        $activity->category = Input::get('categoria');
        $activity->date = Input::get('data');
        $activity->start_time = Input::get('hora_inicio');
        $activity->duration = Input::get('duracao');
        $activity->save();        

        // redirect
        Session::flash('message', 'Atividade atualizada com sucesso!');
        return redirect()->route('atividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $searchedActivity = Activity::find($id);
        $searchedActivity->delete();

        // redirect
        Session::flash('message', 'Atividade removida com sucesso!');
        return redirect()->route('atividades.index');
    }

}