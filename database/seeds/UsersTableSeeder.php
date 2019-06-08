<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'nakamura',
            'email' => 'test1@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'sugaya',
            'email' => 'test2@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'kawasaki',
            'email' => 'test3@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'nishida',
            'email' => 'test4@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'hirata',
            'email' => 'test5@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'kubota',
            'email' => 'test6@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'yokota',
            'email' => 'test7@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'tamura',
            'email' => 'test8@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'shimizu',
            'email' => 'test9@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'yamashita',
            'email' => 'test10@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'kurita',
            'email' => 'test11@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'yokoyama',
            'email' => 'test12@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'ichinose',
            'email' => 'test13@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'sugiyama',
            'email' => 'test14@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'shimone',
            'email' => 'test15@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'kurihara',
            'email' => 'test16@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'sano',
            'email' => 'test17@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'yoshida',
            'email' => 'test18@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'sasaki',
            'email' => 'test19@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'sato',
            'email' => 'test20@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],[
            'name' => 'tanaka',
            'email' => 'test21@test.com',
            'password' => bcrypt('test1234'),
            'admin_flg' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],);
    }
}
