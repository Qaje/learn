<?php

use App\Note;
use App\User;
use App\Candidate;
use App\Task;
use App\Auth;
/*
use Illuminate\Http\Request;
*/
Route::get('/', function ()
{
    return view('welcome');
});

Route::resource('candidate', 'CandidateController');

Route::resource('task','TaskController');

// Authentication routes...
Route::get('Fauth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*
//display all task
Route::get('create',function(){
});
//add a new task
Route::post('task',function(Request $request){

});

//delete task
Route::delete('task/{id}',function ($id){

});
*/