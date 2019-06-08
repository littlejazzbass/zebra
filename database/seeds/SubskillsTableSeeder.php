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

        DB::table('subskills')->insert([
            'skill_id' => $skill1->id,
            'name' => $names[0],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill1->id,
            'name' => $name[1],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill1->id,
            'name' => $name[2],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill1->id,
            'name' => $name[3],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill1->id,
            'name' => $name[4],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill2->id,
            'name' => $name[5],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill2->id,
            'name' => $name[6],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill2->id,
            'name' => $name[7],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill2->id,
            'name' => $name[8],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill2->id,
            'name' => $name[9],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill3->id,
            'name' => $name[10],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill3->id,
            'name' => $name[11],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill3->id,
            'name' => $name[12],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill3->id,
            'name' => $name[13],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill3->id,
            'name' => $name[14],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill4->id,
            'name' => $name[15],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill4->id,
            'name' => $name[16],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill4->id,
            'name' => $name[17],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill4->id,
            'name' => $name[18],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill4->id,
            'name' => $name[19],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill5->id,
            'name' => $name[20],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill5->id,
            'name' => $name[21],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill5->id,
            'name' => $name[22],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill5->id,
            'name' => $name[23],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill5->id,
            'name' => $name[24],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill6->id,
            'name' => $name[25],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill6->id,
            'name' => $name[26],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill6->id,
            'name' => $name[27],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill6->id,
            'name' => $name[28],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill7->id,
            'name' => $name[29],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill7->id,
            'name' => $name[30],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill7->id,
            'name' => $name[31],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill8->id,
            'name' => $name[32],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill8->id,
            'name' => $name[33],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill9->id,
            'name' => $name[34],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill9->id,
            'name' => $name[35],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill10->id,
            'name' => $name[36],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill10->id,
            'name' => $name[37],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill10->id,
            'name' => $name[38],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

        [
            'skill_id' => $skill11->id,
            'name' => $name[39],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'skill_id' => $skill11->id,
            'name' => $name[40],
            'evaluation' => mt_rand(1,5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],);
}
}
