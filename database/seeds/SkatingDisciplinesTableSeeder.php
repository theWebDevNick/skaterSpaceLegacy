<?php

use Illuminate\Database\Seeder;

class SkatingDisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skating_disciplines')->insert([
            [//1
                'name'=>'Introductory'
            ],
            [//2
                'name'=>'Ice Dancing'
            ],
            [//3
                'name'=>'FreeSkate/Freestyle'
            ],
            [//4
                'name'=>'Pairs'
            ],
            [//5
                'name'=>'Figures'
            ],
            [//6
                'name'=>'Moves'
            ],
            [//7
                'name'=>'Choreography'
            ],
            [///8
                'name'=>'Coaching'
            ],
            [///9
                'name'=>'Synchronized Skating'
            ],
            [///10
                'name'=>'Theatre on Ice'
            ],


        ]);
    }
}
