<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

   use AuthenticatesAndRegistersUsers, ThrottlesLogins;
   public function __construct()
   {
       $this->middleware('guest', ['except' => 'getLogout']);
   }

   /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
   protected function validator(array $data)
   {
       return Validator::make($data, [
           'name' => 'required|max:255',
           'email' => 'required|email|max:255|unique:users',
           'password' => 'required|confirmed|min:6',
       ]);
   }

   /**
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return User
    */
   protected function create(array $data)
   {
       return User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => bcrypt($data['password']),
       ]);
   }

     public function index()
    {
        $notes = Note::all();
  //s  dd($notes);

        return view('notes/list',$notes);
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
        $data = request()->all();
        Note::create($data);
        return redirect()->to('notes');
    }

    public function show($note)
    {
        return ('esrtasen show0');
        //return view('notes/list');
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