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
        $group = DB::table('groups')->first();
        $titles = ['要件定義','設計','実装','テスト'];

        foreach ($titles as $title) {
            DB::table('skills')->insert([
                'title' => $title,
                'group_id' => $group->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
