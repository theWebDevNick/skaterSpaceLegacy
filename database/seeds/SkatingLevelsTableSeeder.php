<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SkatingLevelsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('skating_levels')->insert([
            [
                'name'=>'Basic 1',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>1
            ],
            [
                'name'=>'Basic 2',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>2
            ],
            [
                'name'=>'Basic 3',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>3
            ],
            [
                'name'=>'Basic 4',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>4
            ],
            [
                'name'=>'Basic 5',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>5
            ],
            [
                'name'=>'Basic 6',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>6
            ],
            [
                'name'=>'Basic 7',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>7
            ],
            [
                'name'=>'Basic 8',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>8
            ],
            [
                'name'=>'Adult 1',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>1
            ],
            [
                'name'=>'Adult 2',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>2
            ],
            [
                'name'=>'Adult 3',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>3
            ],
            [
                'name'=>'Adult 4',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>4
            ],
            [
                'name'=>'Adult 5',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>5
            ],
            [
                'name'=>'Adult 6',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>6
            ],
            [
                'name'=>'Pre-Preliminary',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>10
            ],
            [
                'name'=>'Preliminary',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>11
            ],
            [
                'name'=>'Pre-Juvenile',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>12
            ],
            [
                'name'=>'Juvenile',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>13
            ],
            [
                'name'=>'Intermediate',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>14
            ],
            [
                'name'=>'Novice',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>15
            ],
            [
                'name'=>'Junior',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>16
            ],
            [
                'name'=>'Senior',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>17
            ],
            [
                'name'=>'Pre-Bronze',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>10
            ],
            [
                'name'=>'Bronze',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>11
            ],
            [
                'name'=>'Pre-Silver',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>12
            ],
            [
                'name'=>'Silver',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>12
            ],
            [
                'name'=>'Pre-Gold',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>13
            ],
            [
                'name'=>'Gold',
                'is_terminal_level'=>false,
                'verification_required'=>false,
                'relative_weight'=>14
            ],

        ]);
	}

}
