<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
      public function store(Request $request)
      {
          //createu
          User::create($request->all());
          return ['created'=> true];
      }

    public function show($id)
    {
        //obterner
        return User>::find($id);
    }

    public function edit($id)
    {
        //
    }
 function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return ['update'=>true];
    }
    public function destroy($id)
    {
        //eliminar
        User::destroy($id);
        return['deleted'=>true];
    }
}
