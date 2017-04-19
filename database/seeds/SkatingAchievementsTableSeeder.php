<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SkatingAchievementsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('skating_achievements')->insert([
            [
                'name'=>'LTS Basic 1 Completion',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
            ],
            [
                'name'=>'LTS Instructor Rating (TEST)',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>false,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>true,
            ]
        ]);
	}

}
