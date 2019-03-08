<?php

namespace App\Http\Controllers;

use App\Category;
use View;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all categories
        $categories = Category::all();
        // load the views and pass the categories
        return View::make('categories.list')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // load the create form (views/categories/form.blade.php)
        return View::make('categories.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // validate
        $rules = array(
            'nome'      => 'required',
            'eixo'      => 'required',
            'tipo'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation
        if ($validator->fails()) 
            return redirect()->route('categorias.create')->withErrors($validator);

        // store
        Category::create([
            'name'          => Input::get('nome'),
            'description'   => Input::get('descricao'), 
            'search_center' => Input::get('eixo'), 
            'type'          => Input::get('tipo')
        ]);

        // redirect
        Session::flash('message', 'Categoria criada com sucesso!');
        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // get the category
        $searchedCategory = Category::find($category)->first();

        // show the view and pass the category to it
        return View::make('categories.form')->with('category', $searchedCategory);
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
        $searchedCategory = Category::find($id)->first();

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
    public function update($id)
    {
        // validate
        $rules = array(
            'nome'         => 'required',
            'eixo'         => 'required',
            'tipo'         => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation
        if ($validator->fails()) 
            return Redirect::to('categories.form', ['category' => $category])->withErrors($validator);
        
        // store
        $category = Category::find($id);

        $category->name          = Input::get('nome');
        $category->description   = Input::get('descricao');
        $category->search_center = Input::get('eixo');
        $category->type          = Input::get('tipo');
        $category->save();

        // redirect
        Session::flash('message', 'Categoria atualizada com sucesso!');
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $searchedCategory = Category::find($id);
        $searchedCategory->delete();

        // redirect
        Session::flash('message', 'Categoria removida com sucesso!');
        return redirect()->route('categorias.index');
    }
}