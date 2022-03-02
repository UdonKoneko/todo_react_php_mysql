<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>TODO</title>
<!-- <script
    crossorigin
    src="https://unpkg.com/react@17/umd/react.production.min.js"
></script> -->
<!-- <script
    crossorigin
    src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"
></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script> -->
<!-- <script src="./index2.jsx" type="text/babel"></script> -->
</head>
<body>
    <form action="/todo" method="post">
        <input type="text" name="task"></input>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">登録</button>
    </form>    
    <div id="todos">
        <table>
            <tr>
                <th>ID</th>
                <th>タスク名</th>
                <th>ステータス</th>
                <th>登録日時</th>
                <th>更新日時</th>
                <th>削除</th>
            </tr>
            @foreach($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->task }}</td>
                <td>{{ $todo->status }}</td>
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
        </table>
    </div>
</body>
