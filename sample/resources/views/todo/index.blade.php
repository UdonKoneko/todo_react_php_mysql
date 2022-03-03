@extends('todo/layout')
@section('content')
    @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>
                <a id="task_edit" href="/todo/{{ $todo->id }}/edit">{{ $todo->task }}</a>
            </td>
            <td id="todo-status">
                @if($todo->status == 0)
                <i class="fa-solid fa-check color-gray"></i>
                @elseif($todo->status == 1)
                <i class="fa-solid fa-check color-green"></i>
                @endif
            </td>
            <td>{{ $todo->updated_at }}</td>
            <td>{{ $todo->created_at }}</td>
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
