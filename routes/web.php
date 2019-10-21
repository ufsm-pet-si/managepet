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
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
//petianos
Route::resource('petianos', 'PetianoController');
//participants
Route::resource('participantes', 'ParticipantController');
//activities - editions
Route::resource('atividades', 'ActivityController');
//activities - categories
Route::resource('categories', 'CategoryController');
//agenda
Route::get('/agenda', 'HomeController@schedule')->name('schedule');
//certificados
Route::get('/certificados', 'HomeController@certificates')->name('certificates');
//relatorios
Route::resource('relatorios', 'RelatoriesController');
//inscrição nas atividades
Route::resource('subscription', 'SubscriptionController');
