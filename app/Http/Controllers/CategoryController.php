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
        //$categories = Category::all();
        // load the views and pass the categories
        // return view('categories.index', compact('categories'));
        //return View::make('categories.list')->with('categories', $categories);

        return View::make('categories.list');

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

}