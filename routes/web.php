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
    return view('certificates/index');
});

//certificates
Route::get('/certificados', 'HomeController@certificates')->name('certificates');
Route::post('/certificados', 'HomeController@listCertificates')->name('listCertificates');
Route::get('/certificados/{matricula}/{activity_id}', 'HomeController@getCertificate')->name('getCertificate');
//schedule
Route::get('/agenda', 'HomeController@schedule')->name('schedule');
Route::get('/getEvents', 'HomeController@getEvents')->name('getEvents');

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
//relatorios
Route::get('/relatorios', 'HomeController@relatories')->name('relatories');
//inscrição nas atividades
Route::resource('subscription', 'SubscriptionController');
//presença dos inscritos
Route::resource('presence', 'PresenceController');
