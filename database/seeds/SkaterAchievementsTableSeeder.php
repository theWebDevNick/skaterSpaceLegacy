<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkaterAchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skater_achievements')->insert([
            [
                'achievement_id'=>1,
                'skater_id'=>1,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ],
            [
                'achievement_id'=>2,
                'skater_id'=>1,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ],
            [
                'achievement_id'=>1,
                'skater_id'=>2,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ],
            [
                'achievement_id'=>2,
                'skater_id'=>2,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ],
            [
                'achievement_id'=>3,
                'skater_id'=>2,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ]
        ]);
    }
}
