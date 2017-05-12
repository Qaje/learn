<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Note;
use DB;

class NoteController extends Controller
{
    public function index()
    {
        //$notes = DB::table('notes')->get();
        $notes = Note::all();
        return view('notes/index',compact('notes'));
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
            $this -> validate(request(),[
                    'note' => ['required','max:200']
                ]);
            $data = request()->all();

            Note::create($data);

            return redirect()->to('notes');
        //return request()->only ('note');
        //return 'esta en store  ';
    }

    public function show($note)
    {
        dd($note);
        //return $id;
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
