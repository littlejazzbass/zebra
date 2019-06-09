<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkilldetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all()->toArray();

        for ($i = 0;  $i<count($users); $i++) {
            DB::table('skilldetails')->insert([
                'user_id' => $users[$i]['id'],
                'total' => 78,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
