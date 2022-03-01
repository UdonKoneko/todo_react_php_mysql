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
    <form>
        <input type="text" name="task"></input>
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
            </tr>
            @foreach($todos as $todo)
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->task }}</td>
            <td>{{ $todo->status }}</td>
            <td>{{ $todo->updated_at }}</td>
            <td>{{ $todo->created_at }}</td>
            <td>{{ $todo->deleted_at }}</td>
            @endforeach
        </table>
    </div>
</body>
