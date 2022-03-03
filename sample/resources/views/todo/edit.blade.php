@extends('todo/layout')
@section('content')
    @foreach($todos as $todo_row)
        <tr>
            <td>{{ $todo->id }}</td>
            @if($todo_row->id == $todo->id)
            <td id="todo-task">
                <form action="/todo/{{ $todo->id }}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="task" placeholder="{{ $todo->task }}"></input>
                </form>
            </td>
            @else
            <td>
                <a id="task_edit" href="/todo/{{ $todo_row->id }}/edit">{{ $todo_row->task }}</a>
            </td>
            @endif
            <td id="todo-status">
                @if($todo_row->status == 0)
                <i class="fa-solid fa-check color-gray"></i>
                @elseif($todo_row->status == 1)
                <i class="fa-solid fa-check color-green"></i>
                @endif
            </td>
            <td>{{ $todo_row->updated_at }}</td>
            <td>{{ $todo_row->created_at }}</td>
            <td>
                <form action="/todo/{{ $todo->id }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection