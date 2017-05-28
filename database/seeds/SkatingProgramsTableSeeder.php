<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SkatingProgramsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('skating_programs')->insert([

                [//1
                    'name'=>'Learn To Skate Basic Skills',
                    'administered_by'=>4,
                    'discipline_id'=>1,
                    'is_coaching_track'=>false,
                    'is_test_track'=>false,
                    'is_introduction_track'=>true
                ],
                [//2
                    'name'=>'Learn To Skate Adult Track',
                    'administered_by'=>4,
                    'discipline_id'=>1,
                    'is_coaching_track'=>false,
                    'is_test_track'=>false,
                    'is_introduction_track'=>true
                ],
                [
                    'name'=>'Standard Freestyle',
                    'administered_by'=>1,
                    'discipline_id'=>3,
                    'is_coaching_track'=>false,
                    'is_test_track'=>true,
                    'is_introduction_track'=>false
                ],
                [
                    'name'=>'Adult Freestyle',
                    'administered_by'=>1,
                    'discipline_id'=>3,
                    'is_coaching_track'=>false,
                    'is_test_track'=>true,
                    'is_introduction_track'=>false
                ],
                [
                    'name'=>'Standard Moves in the Field',
                    'administered_by'=>1,
                    'discipline_id'=>6,
                    'is_coaching_track'=>false,
                    'is_test_track'=>true,
                    'is_introduction_track'=>false
                ],
                [
                    'name'=>'Adult Moves in the Field',
                    'administered_by'=>1,
                    'discipline_id'=>6,
                    'is_coaching_track'=>false,
                    'is_test_track'=>true,
                    'is_introduction_track'=>false
            ]
        ]);
	}

}
