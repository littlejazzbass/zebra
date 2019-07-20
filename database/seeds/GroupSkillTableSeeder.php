<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;

class GroupSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group1 = DB::table('groups')->find(1);
        $group2 = DB::table('groups')->find(2);
        $group3 = DB::table('groups')->find(3);
        $group4 = DB::table('groups')->find(4);
        $group5 = DB::table('groups')->find(5);

        $skills = Skill::all()->toArray();

        DB::table('group_skill')->insert([
            [
                'group_id' => $group1->id,
                'skill_id' => $skills[0]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'skill_id' => $skills[1]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'skill_id' => $skills[2]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'skill_id' => $skills[3]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group2->id,
                'skill_id' => $skills[0]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group2->id,
                'skill_id' => $skills[1]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group2->id,
                'skill_id' => $skills[2]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group2->id,
                'skill_id' => $skills[3]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group3->id,
                'skill_id' => $skills[0]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group3->id,
                'skill_id' => $skills[1]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group3->id,
                'skill_id' => $skills[2]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group3->id,
                'skill_id' => $skills[3]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group4->id,
                'skill_id' => $skills[4]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group4->id,
                'skill_id' => $skills[5]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group4->id,
                'skill_id' => $skills[6]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group4->id,
                'skill_id' => $skills[7]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group4->id,
                'skill_id' => $skills[8]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group5->id,
                'skill_id' => $skills[9]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group5->id,
                'skill_id' => $skills[10]['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
