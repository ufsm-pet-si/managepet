<?php

namespace App\Http\Controllers;

use App\Category;
use View;
use Session;
use Redirect;
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
    public function store(Request $request, Category $category)
    {
        $request->validate([
            'name'          => 'required',
            'search_center' => 'required',
            'type'          => 'required'
        ]);

        // store
        Category::create($request->all());

        // redirect
        Session::flash('message', ['text'=>"Categoria criada com sucesso!", 'type'=>"success"]);
        return redirect()->route('categories.index');
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
        $searchedCategory = Category::find($id);

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
        $request->validate([
            'name'          => 'required',
            'search_center' => 'required',
            'type'          => 'required'
        ]);

        // store
        $category->update($request->all());

        // redirect
        Session::flash('message', ['text'=>"Categoria atualizada com sucesso!", 'type'=>"success"]);
        return redirect()->route('categories.index');
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
        $category->delete();

        // redirect
        Session::flash('message', ['text'=>"Categoria removida com sucesso!", 'type'=>"success"]);
        return redirect()->route('categories.index');
    }
}