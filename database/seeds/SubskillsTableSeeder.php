<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubskillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'クライアント折衝',
            'WBS調整',
            'リリース手順書',
            'チームマネジメント',
            '資料作成',
        ];

        foreach ($titles as $title) {
            DB::table('subskills')->insert([
                'title' => $title,
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
