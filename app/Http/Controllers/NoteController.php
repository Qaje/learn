<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/*NOTE */
use App\Note;
use DB;

class NoteController extends Controller
{
    public function index()
    {
       // $notes = DB::table('notes')->get();
        $notes = Note::all();
  //   dd($notes);
        return view('notes/index',compact('notes'));
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
        return 'esta en store  ';
    }

    public function show(Note $note)
    {
        // $note = Note::find($id);
        // return view('notes.show',compact('note'));
        return $note;
      //  dd($note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
