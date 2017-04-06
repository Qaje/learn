<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Endroid\QrCode\QrCode;

class TaskController extends Controller
{
    public function index()
    {
        
        return view('tasks/index');
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
        return view('tasks/edit ',['id'=>$id]);
    }

    function update($id)
    {
        dd(input::all());
    }
    public function destroy($id)
    {
        //eliminar
        Task::destroy($id);
        return['deleted'=>true];
    }
}
