<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            '要件定義','設計','実装','テスト',  //エンジニアスキル
            'Photoshop', 'illustrator', 'タイポグラフィ', '配色','UX',  //デザインスキル
            'マネジメント','教育',  //マネジメント
        ];

        foreach ($names as $name) {
            DB::table('skills')->insert([
                'name' => $name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
