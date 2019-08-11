<?php

use App\Models\User;
use App\Models\Subskill;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PerformancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all()->toArray();

        $subskills = Subskill::all()->toArray();

        for($i = 0; $i < count($users); $i++){
            for($j = 0; $j < count($subskills); $j++){
                DB::table('performances')->insert([
                    'user_id' => $users[$i]['id'],
                    'subskill_id' => $subskills[$j]['id'],
                    'evaluation' => mt_rand(1,5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
