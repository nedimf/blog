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

/*Route::get('/my_view', function(){
	return view('my_view');
});*/

//Ruta za pocetnu stranicu
Route::get('/','TestController@welcome');
Route::get('/pocetna','TestController@pocetna_view');
Route::get('/clanak','TestController@clanak');
Route::get('/pocetna/{ime}', 'TestController@nameSet');
