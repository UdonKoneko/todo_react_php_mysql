<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('todos')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $todos = [
            [
                'task'   => 'sample1',
                'status' => 0
            ],
            [
                'task'   => 'sample2',
                'status' => 1
            ],
        ];

        foreach ($todos as $todo) {
            \App\Todo::create($todo);
        }
    }
}
