<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubskillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill = DB::table('skills')->first();

        $titles = [
            'クライアント折衝',
            'WBS調整',
            'リリース手順書',
            'チームマネジメント',
            '資料作成',
        ];

        foreach ($titles as $title) {
            DB::table('subskills')->insert([
                'skill_id' => $skill->id,
                'title' => $title,
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
