<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = \App\Models\Todo::all();
        return view('todo/index', compact('todos'));
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todo/edit', compact('todo'));
    }

    public function store(Request $request)
    {
        $todo         = new \App\Models\Todo();
        $todo->task   = $request->task;
        $todo->status = 0;
        $todo->save();

        return redirect("/todo");
    }

    /**
     * タスクの削除
     *
     * @id int タスクのid
     */
    public function destroy($id)
    {
        $todo = \App\Models\Todo::findOrFail($id);
        $todo->delete();

        return redirect("/todo");
    }
}
