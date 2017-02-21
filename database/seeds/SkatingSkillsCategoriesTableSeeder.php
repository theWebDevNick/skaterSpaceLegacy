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
            [
                'name'=>'jumps',
                'skating_discipline_id'=>3
            ],
            [
                'name'=>'spins',
                'skating_discipline_id'=>3
            ],
            [
                'name'=>'turns',
                'skating_discipline_id'=>3
            ],
            [
                'name'=>'edges',
                'skating_discipline_id'=>4
            ],
            [
                'name'=>'elementary',
                'skating_discipline_id'=>1
            ]
        ]);
    }
}
