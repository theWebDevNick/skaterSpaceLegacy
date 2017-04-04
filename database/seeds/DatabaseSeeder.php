<?php

use Illuminate\Database\Seeder;

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
        $this->call(SkatingCredentialsTableSeeder::class);//for dev and deploy
        $this->call(skatingCredentialsSkillsTableSeeder::class);//for dev and deploy
        $this->call(skatingClubsTableSeeder::class);
        $this->call(UserTableSeeder::class);//for dev ONLY TODO: REMOVE
        $this->call(SkaterCredentialsTableSeeder::class);//for dev ONLY TODO: REMOVE
        $this->call(SkaterDisciplinesTableSeeder::class);//for dev ONLY TODO: REMOVE

    }
}
