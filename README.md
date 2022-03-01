# todo_react_php_mysql

## 目的

TODO アプリの作成

### 使用技術

- React
- PHP
- MySQL

### DB

#### todos

| 列         | 型             | 制約        |
| ---------- | -------------- | ----------- |
| id         | AUTO_INCREMENT | PRIMARY KEY |
| task       | VARCHAR(50)    | NOT NULL    |
| status     | INTEGER        | NOT NULL    |
| created_at | timestamp      | NOT NULL    |
| updated_at | timestamp      | NOT NULL    |
| deleted_at | timestamp      |             |

#### DB 接続

```
$ mysql.server start
$ mysql -uroot
```
