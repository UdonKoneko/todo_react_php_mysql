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
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                @yield('content')
        </table>
    </div>
</body>
