<?php

use Illuminate\Database\Seeder;

class DailyReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daily_reports')->truncate();
        DB::table('daily_reports')->insert([
            [
                'user_id'        => 1,
                'title'          => '日報テーブルの作成',
                'contents'       => 'マイグレーションファイル作成、編集、実行。シーダーファイル作成、編集、実行。',
                'reporting_time' => '2019-06-18',
                'created_at'     => '2019-06-18',
            ]
        ]);

    }
}
