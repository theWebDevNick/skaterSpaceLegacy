<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SkatingCredentialsTableSeederTableSeeder extends Seeder {

	public function run()
	{
        DB::table('skating_credentials')->insert([
            [

            ]
        ]);
	}

}
