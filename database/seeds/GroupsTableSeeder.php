<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = DB::table('companys')->find(2);

        $names =[
            'SES第一事業部',
            'SES第二事業部',
            'SES第三事業部',
            'デザインユニット',
            'マネジメントユニット'
        ];

        foreach ($names as $name) {
            DB::table('groups')->insert([
                'company_id' => $company->id,
                'name' => $name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
