@extends('todo/layout')
@section('content')
    @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>
                <a id="task_edit" href="/todo/{{ $todo->id }}/edit">{{ $todo->task }}</a>
            </td>
            <td>
                <form action="/todo/{{ $todo->id }}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="status" value="{{ $todo->status }}"></input>
                    @if($todo->status == 0)
                    <button type="submit" class="fa-solid fa-check color-gray button_icon"></button>
                    @elseif($todo->status == 1)
                    <button type="submit" class="fa-solid fa-check color-green button_icon"></button>
                    @endif
                </form>
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
