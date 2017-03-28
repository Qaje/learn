<?php

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('greatings',function(){
  return 'hello bro grating from gratings function';
});

Route::get('notes',function(){
    $notes = Note::all();
    return view('notes',compact('notes'));
});
Route::post('notes',function(){
  return ' Create a note';
});
