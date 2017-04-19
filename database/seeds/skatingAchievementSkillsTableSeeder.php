<?php

use Illuminate\Database\Seeder;

class skatingAchievementSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skating_achievement_skills')->insert([
            [
                'achievement_id'=>1,
                'skill_id'=>1,
                'display_order'=>1
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>2,
                'display_order'=>2
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>3,
                'display_order'=>3
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>4,
                'display_order'=>4
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>5,
                'display_order'=>5
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>6,
                'display_order'=>6
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>7,
                'display_order'=>7
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>8,
                'display_order'=>8
            ],
            [
                'achievement_id'=>1,
                'skill_id'=>9,
                'display_order'=>9
            ]

        ]);
    }
}
