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
                'content'       => 'マイグレーションファイル作成、編集、実行。シーダーファイル作成、編集、実行。',
                'reporting_time' => '2019-06-18',
                'created_at'     => '2019-06-18',
            ],
            [
                'user_id'        => 2,
                'title'          => 'ルートの定義',
                'content'       => 'web.phpにアクセスと処理を定義',
                'reporting_time' => '2019-06-19',
                'created_at'     => '2019-06-19',
            ],
            [
                'user_id'        => 3,
                'title'          => 'コントローラーの作成',
                'content'       => 'DailyReportControllerの作成。name space に注意',
                'reporting_time' => '2019-06-19',
                'created_at'     => '2019-06-19',
            ]
        ]);
    }
}
