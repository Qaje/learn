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

Route::get('/create', function(){
	$task = App\Task::create([
		'id' => 5,
		'name' => 'Laravel 5.1'
		]);
	return 'Registro exitoso';
});

Route::get('/read/{id}', function($id){
	$task = App\Task::find($id);
	return $task;
});

Route::get('/update/{id}',function($id){
	$task = App\Task::find($id);

	$task->name = 'PHP';
	$task->save();
	return 'Registro actualizado'.$task;
});

Route::get('/delete/{id}',function($id){
	$task = App\Task::find($id);
	$task->delete();
	return 'Registro Elminado';
});
Route::resource('candidate', 'CandidateController');
Route::resource('auth','UserController');
Route::resource('task','TaskController');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');