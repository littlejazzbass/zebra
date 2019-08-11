<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CompanysTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GroupUserTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(GroupSkillTableSeeder::class);
        $this->call(SubskillsTableSeeder::class);
        $this->call(PerformancesTableSeeder::class);
        $this->call(PerformanceHistorysTableSeeder::class);
    }
}
