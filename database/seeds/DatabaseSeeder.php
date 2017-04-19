<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SkatingDisciplinesTableSeeder::class);//for dev and deploy
        $this->call(GoverningOrganizationsTableSeeder::class);//for dev and deploy
        $this->call(SkatingSkillsCategoriesTableSeeder::class);//for dev and deploy
        $this->call(SkatingSkillsTableSeeder::class);//for dev and deploy
        $this->call(userTypesTableSeeder::class);//for dev and deploy
        $this->call(SkatingProgramsTableSeeder::class);//for dev and deploy
        $this->call(SkatingLevelsTableSeeder::class);//for dev and deploy
        $this->call(SkatingAchievementsTableSeeder::class);//for dev and deploy
        $this->call(skatingAchievementSkillsTableSeeder::class);//for dev and deploy
        $this->call(skatingClubsTableSeeder::class);
        $this->call(UserTableSeeder::class);//for dev ONLY TODO: REMOVE
        $this->call(SkaterAchievementsTableSeeder::class);//for dev ONLY TODO: REMOVE
        $this->call(SkaterDisciplinesTableSeeder::class);//for dev ONLY TODO: REMOVE

    }
}
