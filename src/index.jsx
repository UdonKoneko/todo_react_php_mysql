// タスク登録
function Register() {
    return (
        <form>
            <input type="text" name="task"></input>
            <button type="submit">登録</button>
        </form>
    );
}

// タスクリスト部分
function Todo() {
    return (
        <table>
            <tr>
            <th>ID</th>
            <th>タスク名</th>
            <th>ステータス</th>
            <th>登録日時</th>
            <th>更新日時</th>
            </tr>
        </table>
    );
}

function App() {
    return (
        <div className="container">
            <Register />
            <Todo />
        </div>
    );
}

const root = document.getElementById("root");
ReactDOM.render(<App />, root);