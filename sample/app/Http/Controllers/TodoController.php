<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo/index', compact('todos'));
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todo/edit', compact('todo'));
    }
}
