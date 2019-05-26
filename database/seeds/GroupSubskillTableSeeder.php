<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSubskillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = DB::table('groups')->first();
        $subskill = DB::table('subskills')->first();
        $titles = ['要件定義','設計','実装','テスト'];

        foreach ($titles as $title) {
            DB::table('group_subskill')->insert([
                'title' => $title,
                'group_id' => $group->id,
                'subskill_id' => $subskill->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
