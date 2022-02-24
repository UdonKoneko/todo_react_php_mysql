function Todo() {
    return (
        <table>
            <tr>
            <th>ID</th>
            <th>タスク名</th>
            <th>登録日時</th>
            <th>更新日時</th>
            <th>完了日時</th>
            </tr>
        </table>
    );
}

function App() {
    return (
        <div className="container">
            <Todo />
        </div>
    );
}

const root = document.getElementById("root");
ReactDOM.render(<App />, root);