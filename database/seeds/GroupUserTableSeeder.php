<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupUserTableSeeder extends Seeder
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

        $user1 = DB::table('users')->find(1);
        $user2 = DB::table('users')->find(2);
        $user3 = DB::table('users')->find(3);
        $user4 = DB::table('users')->find(4);
        $user5 = DB::table('users')->find(5);
        $user6 = DB::table('users')->find(6);

        $user7 = DB::table('users')->find(7);
        $user8 = DB::table('users')->find(8);
        $user9 = DB::table('users')->find(9);
        $user10 = DB::table('users')->find(10);
        $user11 = DB::table('users')->find(11);

        $user12 = DB::table('users')->find(12);
        $user13 = DB::table('users')->find(13);
        $user14 = DB::table('users')->find(14);
        $user15 = DB::table('users')->find(15);
        $user16 = DB::table('users')->find(16);

        $user17 = DB::table('users')->find(17);
        $user18 = DB::table('users')->find(18);
        $user19 = DB::table('users')->find(19);

        $user20 = DB::table('users')->find(20);
        $user21 = DB::table('users')->find(21);

        DB::table('group_user')->insert([
            [
                'group_id' => $group1->id,
                'user_id' => $user1->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'user_id' => $user2->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'user_id' => $user3->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'user_id' => $user4->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'user_id' => $user5->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group1->id,
                'user_id' => $user6->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group2->id,
                'user_id' => $user7->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group2->id,
                'user_id' => $user8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group2->id,
                'user_id' => $user9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group2->id,
                'user_id' => $user10->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group2->id,
                'user_id' => $user11->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group3->id,
                'user_id' => $user12->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group3->id,
                'user_id' => $user13->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group3->id,
                'user_id' => $user14->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group3->id,
                'user_id' => $user15->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group3->id,
                'user_id' => $user16->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group4->id,
                'user_id' => $user17->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group4->id,
                'user_id' => $user18->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group4->id,
                'user_id' => $user19->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'group_id' => $group5->id,
                'user_id' => $user20->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group5->id,
                'user_id' => $user21->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group5->id,
                'user_id' => $user2->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group5->id,
                'user_id' => $user1->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group5->id,
                'user_id' => $user7->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'group_id' => $group5->id,
                'user_id' => $user12->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
