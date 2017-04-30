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



Route::get('/blog/admin','PostController@admin_index')->middleware('isAdmin');;




Route::get('/blog/{id}','CommentController@create');
Route::post('blog/comment/new', 'CommentController@store');
Route::get('blog/admin/comment', 'CommentController@show_comments')->middleware('isAdmin');;
Route::get('blog/admin/comment/delete/{id}', 'CommentController@destroy')->middleware('isAdmin');;


	Route::get('/blog','PostController@index');

Route::get('blog/admin/new/', 'PostController@create')->middleware('isAdmin');;
Route::post('blog/admin/new/', 'PostController@store')->middleware('isAdmin');;
Route::get('blog/admin/edit/{id}', 'PostController@edit')->middleware('isAdmin');;
Route::post('blog/admin/edit/{id}', 'PostController@update')->middleware('isAdmin');;
Route::get('blog/admin/delete/{id}', 'PostController@destroy')->middleware('isAdmin');;
Route::get('blog/{id}/', 'PostController@show');


//Ruta za pocetnu stranicu

Route::get('/php_editor','TestController@php_view');
Route::get('/','PostController@index');
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



Auth::routes();

Route::get('/home', 'HomeController@index');


