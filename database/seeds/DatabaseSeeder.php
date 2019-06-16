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
        $this->call([
            CompanysTableSeeder::class,
            GroupsTableSeeder::class,
            SkillsTableSeeder::class,
            GroupSkillTableSeeder::class,
            SubskillsTableSeeder::class,
            UsersTableSeeder::class,
            GroupUserTableSeeder::class,
            SkilldetailsTableSeeder::class,
        ]);
    }
}
