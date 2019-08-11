<?php
use Carbon\Carbon;
use App\Models\User;
use App\Models\Subskill;
use Illuminate\Database\Seeder;

class PerformanceHistorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allUser = User::all()->toArray();
        $allSubSkills = Subskill::all()->toArray();

        for ( $i = 0; $i<count($allUser); $i++){
            for( $j = 0; $j<count($allSubSkills); $j++){
                DB::table('performance_historys')->insert([
                    'subskill_id' =>  $allSubSkills[$j]['id'],
                    'user_id' => $allUser[$i]['id'],
                    'evaluation' => mt_rand(1,5),
                    'group_number' => 201908,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
