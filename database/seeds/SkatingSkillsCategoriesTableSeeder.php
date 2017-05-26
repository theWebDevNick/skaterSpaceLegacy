<?php

use Illuminate\Database\Seeder;

class SkatingSkillsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skating_skill_categories')->insert([
            [//1
                'name'=>'jumps',
                'skating_discipline_id'=>3
            ],
            [//2
                'name'=>'spins',
                'skating_discipline_id'=>3
            ],
            [//3
                'name'=>'turns',
                'skating_discipline_id'=>3
            ],
            [//4
                'name'=>'edges',
                'skating_discipline_id'=>4
            ],
            [//5
                'name'=>'elementary',
                'skating_discipline_id'=>1
            ],
            [//6
                'name'=>'stops',
                'skating_discipline_id'=>1
            ],
            [//7
                'name'=>'pattern dance',
                'skating_discipline_id'=>2
            ],
            [//8
                'name'=>'lifts',
                'skating_discipline_id'=>2
            ],
            [//9
                'name'=>'moves patterns',
                'skating_discipline_id'=>6
            ]
        ]);
    }
}
