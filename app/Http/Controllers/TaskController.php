<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TaskController extends Controller
{
    public function index()
    {
        return 'lista de tasks';
    }
    public function create()
    {
        return View('tasks/create');
        //return 'formulario create';
    }
    public function store()
    {

        dd(Input::all());
    }

    public function show($id)
    {
        //obterner
        return Task::find($id);
    }

    public function edit($id)
    {
        //
    }
    function update(Request $request, $id)
    {
        $user = Task::find($id);
        $user->update($request->all());
        return ['update'=>true];
    }
    public function destroy($id)
    {
        //eliminar
        Task::destroy($id);
        return['deleted'=>true];
    }
}
