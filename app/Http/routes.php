<?php

use App\Note;
use App\User;
use App\Candidate;
use App\Task;
/*
use Illuminate\Http\Request;
*/
Route::get('/', function ()
{
    return view('welcome');
});

Route::resource('candidate', 'CandidateController');

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::resource('task','TaskController');
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