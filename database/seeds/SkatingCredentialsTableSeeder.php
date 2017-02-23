<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SkatingCredentialsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('skating_credentials')->insert([
            [
                'name'=>'LTS Basic 1 Completion',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true
            ]
        ]);
	}

}
