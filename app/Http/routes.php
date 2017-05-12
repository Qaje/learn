<?php

use App\Note;
use App\User;
use App\Candidate;
use App\Task;
use App\Auth;

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('notes','NoteController@index');
Route::get('notes/{$id}','NoteController@show');
Route::get('notes/create','NoteController@create');
Route::post('notes','NoteController@store');
//Route::get('notes/{note}','NoteController@show')->where('note','[0-9]+');
// Route::get('notes', 'NoteController@index' {
//     return view('notes', [
//         'notes' => Note::orderBy('created_at', 'asc')->get())
//     ]);
// });

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
Route::controllers(['password' => 'Auth\PasswordController',]);

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
