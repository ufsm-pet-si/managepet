<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//petianos
Route::get('/petianos', 'HomeController@petianos_list')->name('petiano');
Route::get('/petianos/create', 'HomeController@petianos_form')->name('petianos_form');
//participants
Route::get('/participantes', 'HomeController@participants_list')->name('participants');
Route::get('/participantes/create', 'HomeController@participants_form')->name('participants_form');
//activities - editions
Route::resource('atividades', 'ActivityController');
//activities - categories
Route::resource('categorias', 'CategoryController');
//agenda
Route::get('/agenda', 'HomeController@schedule')->name('schedule');
//certificados
Route::get('/certificados', 'HomeController@certificates')->name('certificates');
