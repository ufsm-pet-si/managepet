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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//petianos
Route::get('/petianos', 'HomeController@petianos_list')->name('petiano');
Route::get('/petianos_form', 'HomeController@petianos_form')->name('petianos_form');
//participants
Route::get('/participantes', 'HomeController@participants_list')->name('participants');
Route::get('/participants_form', 'HomeController@participants_form')->name('participants_form');
//activities
Route::resource('atividades', 'ActivityController');