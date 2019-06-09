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
        $names = [
            'クライアント折衝','WBS調整','リリース手順書','チームマネジメント','資料作成',
            '基本設計','詳細設計','DB設計','レビュー','見積り',
            'フロントエンド','バックエンド','DB','モジュール開発','インフラ',
            'テストケース作成','テスト工数見積り','テストレビュー','テスト環境構築','報告書',

            'バナー作成','グラフィック','切り出し','素材作成','作業速度',
            'パス操作','アピアランス操作','作業速度','ロゴ作成',
            'フォント選定','カーニング','配置',
            '配色選定','色効果理解',
            'UX基礎知識','UX設計',

            '適切な指示','経営理念に沿った行動','後進育成',
            '的確な指導','目標を与えられる',
        ];

        $skill1 = DB::table('skills')->find(1);
        $skill2 = DB::table('skills')->find(2);
        $skill3 = DB::table('skills')->find(3);
        $skill4 = DB::table('skills')->find(4);
        $skill5 = DB::table('skills')->find(5);
        $skill6 = DB::table('skills')->find(6);
        $skill7 = DB::table('skills')->find(7);
        $skill8 = DB::table('skills')->find(8);
        $skill9 = DB::table('skills')->find(9);
        $skill10 = DB::table('skills')->find(10);
        $skill11 = DB::table('skills')->find(11);

        DB::table('subskills')->insert([
            [
                'skill_id' => $skill1->id,
                'name' => $names[0],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill1->id,
                'name' => $names[1],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill1->id,
                'name' => $names[2],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill1->id,
                'name' => $names[3],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill1->id,
                'name' => $names[4],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill2->id,
                'name' => $names[5],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill2->id,
                'name' => $names[6],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill2->id,
                'name' => $names[7],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill2->id,
                'name' => $names[8],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill2->id,
                'name' => $names[9],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill3->id,
                'name' => $names[10],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill3->id,
                'name' => $names[11],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill3->id,
                'name' => $names[12],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill3->id,
                'name' => $names[13],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill3->id,
                'name' => $names[14],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill4->id,
                'name' => $names[15],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill4->id,
                'name' => $names[16],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill4->id,
                'name' => $names[17],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill4->id,
                'name' => $names[18],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill4->id,
                'name' => $names[19],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill5->id,
                'name' => $names[20],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill5->id,
                'name' => $names[21],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill5->id,
                'name' => $names[22],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill5->id,
                'name' => $names[23],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill5->id,
                'name' => $names[24],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill6->id,
                'name' => $names[25],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill6->id,
                'name' => $names[26],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill6->id,
                'name' => $names[27],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill6->id,
                'name' => $names[28],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill7->id,
                'name' => $names[29],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill7->id,
                'name' => $names[30],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill7->id,
                'name' => $names[31],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill8->id,
                'name' => $names[32],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill8->id,
                'name' => $names[33],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill9->id,
                'name' => $names[34],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill9->id,
                'name' => $names[35],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill10->id,
                'name' => $names[36],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill10->id,
                'name' => $names[37],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill10->id,
                'name' => $names[38],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'skill_id' => $skill11->id,
                'name' => $names[39],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'skill_id' => $skill11->id,
                'name' => $names[40],
                'evaluation' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
}
}
