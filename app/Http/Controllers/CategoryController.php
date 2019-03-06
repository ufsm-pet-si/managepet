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
    public function store(Request $request)
    {
        // validate
        $rules = array(
            'categoria' => 'required',
            'eixo'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation
        if ($validator->fails()) 
            return redirect()->route('categorias.create')->withErrors($validator);

        // store
        Category::create([
            'category'      => $request->input('categoria'),
            'description'   => $request->input('descricao'), 
            'search_center' => $request->input('eixo'), 
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
        $searchedCategory = Category::find($category);

        // show the view and pass the nerd to it
        return View::make('categories.form')->with('category', $searchedCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // get the category
        $searchedCategory = Category::find($category);

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
    public function update(Request $request, Category $category)
    {
        // validate
        $rules = array(
            'categoria'    => 'required',
            'eixo'         => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the validation
        if ($validator->fails()) 
            return Redirect::to('categories.form', ['category' => $category])->withErrors($validator);
        
        // store
        Category::create([
            'category'      => $request->input('categoria'),
            'description'   => $request->input('descricao'), 
            'search_center' => $request->input('eixo'), 
        ]);

        // redirect
        Session::flash('message', 'Categoria atualizada com sucesso!');
        return Redirect::to('categories.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // delete
        $searchedCategory = Category::find($category);
        $searchedCategory->delete();

        // redirect
        Session::flash('message', 'Categoria removida com sucesso!');
        return Redirect::to('categories.list');  
    }
}