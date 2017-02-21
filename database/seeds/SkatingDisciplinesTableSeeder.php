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
            [
                'name'=>'Introductory'
            ],
            [
                'name'=>'Ice Dancing'
            ],
            [
                'name'=>'FreeSkate/Freestyle'
            ],
            [
                'name'=>'Pairs'
            ],
            [
                'name'=>'Figures'
            ],
            [
                'name'=>'Moves'
            ],
            [
                'name'=>'Choreography'
            ],
            [
                'name'=>'Coaching'
            ]

        ]);
    }
}
