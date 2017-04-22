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

//Ruta za Blog

Route::get('/blog','BlogController@index');
Route::get('blog/new/', 'BlogController@create');
Route::post('blog/new/', 'BlogController@store');
Route::get('blog/edit/{id}', 'BlogController@edit');
Route::post('blog/edit/{id}', 'BlogController@update');
Route::get('blog/delete/{id}', 'BlogController@destroy');
Route::get('blog/{id}', 'BlogController@show');
//Ruta za pocetnu stranicu

Route::get('/php_editor','TestController@php_view');
Route::get('/','TestController@welcome');
Route::get('/pocetna','TestController@pocetna_view');
Route::get('/clanak','TestController@clanak');
Route::get('/pocetna/{ime}', 'TestController@nameSet');

//Ruta za DB

Route::get('/view_cities','CitiesController@index');
Route::get('city/new', 'CitiesController@create');
Route::post('city/new', 'CitiesController@store');
Route::get('city/edit/{id}', 'CitiesController@edit');
Route::post('city/edit/{id}', 'CitiesController@update');
Route::get('city/delete/{id}', 'CitiesController@destroy');
Route::get('city/{id}', 'CitiesController@show');





//Route::get('cities','CitiesController@index');


