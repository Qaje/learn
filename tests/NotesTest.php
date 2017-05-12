<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
  use WithoutMiddleware;
    public function test_notes_list()
    {
      //ORM seciencia eloquent
      //HAVING
      Note::create(['note' => 'My first note']);
      Note::create(['note' => 'Second note']);
      //WHEN
        $this->visit('notes')
        //THEN
        ->see('My first note')
        ->see('Second note');
    }

     public function test_create_note()
     {
            //  Route::post('noter')
            //when
            $this ->post('notes');
                //then
                ->see('Creating a note');
     }
}
