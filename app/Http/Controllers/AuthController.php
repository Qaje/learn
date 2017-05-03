<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Auth;

class AuthController extends Controller
{
    public function index()
    {

        return Auth::view('/');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //created
        Auth::create($request->all());
        return ['created'=> true];
    }

    public function show($id)
    {
        //obterner
        return Auth::find($id);
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $Auth = Auth::find($id);
        $Auth->update($request->all());
        return ['update'=>true];
    }
    public function destroy($id)
    {
        //eliminar
        Auth::destroy($id);
        return['deleted'=>true];
    }
}
