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

//Route::group(['middleware'=>['web']],function(){

	Route::get('/','HomeController@index');


	Route::get('card','cardsController@index');

	Route::get('card/{card}','cardsController@show');

	Route::post('cards/{card}/notes', 'notesController@store');

	Route::get('notes/{note}/edit', 'notesController@edit');

	Route::patch('notes/{note}','notesController@update');

//});


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
