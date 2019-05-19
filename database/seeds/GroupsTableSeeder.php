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
        $company = DB::table('companys')->first();

        $names =[
            'unit0',
            'unit1',
            'unit2',
            'unit3',
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
