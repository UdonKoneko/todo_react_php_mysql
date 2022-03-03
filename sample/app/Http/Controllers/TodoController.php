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

    /**
     * 編集画面の表示
     */
    public function edit($id)
    {
        $todos = \App\Models\Todo::all();
        $todo  = \App\Models\Todo::findOrFail($id);
        return view('todo/edit', compact('todos', 'todo'));
    }

    /**
     * 編集
     */
    public function update(Request $request, $id)
    {
        $todo = \App\Models\Todo::findOrFail($id);
        if (isset($request->task)) {
            $todo->task = $request->task;
        }
        if (isset($request->status)) {
            $todo->status = $request->status == 1 ? 0 : 1;
        }
        $todo->save();

        return redirect("/todo");
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
