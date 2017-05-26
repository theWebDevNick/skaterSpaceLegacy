<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SkatingAchievementsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('skating_achievements')->insert([
            [//1
                'name'=>'Basic 1',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>1
            ],
            [//2
                'name'=>'Basic 2',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>2
            ],
            [//3
                'name'=>'Basic 3',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>3
            ], 
            [//4
                'name'=>'Basic 4',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>4
            ],  
            [//5
                'name'=>'Basic 5',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>5
            ], 
            [//6
                'name'=>'Basic 8',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>6
            ],
            [//7
                'name'=>'Adult 1',
                'skating_level'=>1,
                'program_id'=>2,
                'granting_org'=>4,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>1
            ],
            [//8
                'name'=>'Adult 2',
                'skating_level'=>1,
                'program_id'=>2,
                'granting_org'=>4,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>2
            ],
            [//9
                'name'=>'Adult 3',
                'skating_level'=>1,
                'program_id'=>2,
                'granting_org'=>4,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>3
            ],
            [//10
                'name'=>'Adult 4',
                'skating_level'=>1,
                'program_id'=>2,
                'granting_org'=>4,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>4
            ],
            [//11
                'name'=>'Adult 5',
                'skating_level'=>1,
                'program_id'=>2,
                'granting_org'=>4,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>5
            ],
            [//12
                'name'=>'Adult 6',
                'skating_level'=>1,
                'program_id'=>2,
                'granting_org'=>4,
                'require_skills_completion'=>true,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>false,
                'progression'=>6
            ],
            [
                'name'=>'LTS Instructor Rating',
                'skating_level'=>1,
                'program_id'=>1,
                'granting_org'=>1,
                'require_skills_completion'=>false,
                'expires'=>false,
                'is_active'=>true,
                'is_coaching_credential'=>true,
            ],
            [
                'name'=>'PSA Master Rating',
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
