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
    return view('/home/index');
});


Route::get('/department-overview','DepartmentsController@index');

Route::get('/departmentoverview/{department}','DepartmentsController@eachDepartment');

Route::get('/department/{department}/curriculum','DepartmentsController@curriculum');



Route::get('/post-overview','PostsController@index');

Route::get('/postoverview/{post}','PostsController@show');

Route::get('/postoverview/department/{department}','DepartmentsController@Posts');

Route::get('/subject-overview/','SyllabusController@Department');
Route::get('/subject-details/{department}','SyllabusController@Subject_Detail');
/*Route::get('/subject-overview', function () {
    return view('/subjects/index');
});*/

/*Route::get('/subject-details', function () {
    return view('/subjects/syllabus&curriculum');
});*/

Route::get('/mission&vision','MissionVisionsController@index');

/*Route::get('/mission&vision', function () {
	
	$missionvisions=App\MissionVisions::all();
	DB::table('mission_visions')->get();
	//dd($missionvisions);
	return view('/missionvision/index' , compact('missionvisions'));
});*/

/*Route::get('/mission&vision','MissionVisionsController@index');*/

Route::get('/history','HistoryController@index');