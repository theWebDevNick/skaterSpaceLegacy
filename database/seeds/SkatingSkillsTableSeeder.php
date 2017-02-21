<?php

use Illuminate\Database\Seeder;

class SkatingSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skating_skills')->insert([
            //skills from Basic 1
            [
                'name'=>'Sit on Ice and Stand Up',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'March Forward Across the Ice',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Forward Two-Foot Glide',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Dip',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Forward Swizzles',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Backward Wiggles',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Snowplow Stop',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Rocking Horse',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Two-Foot Hop in Place',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            //Skills from Basic 2
            [
                'name'=>'Forward One-Foot Glides',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Forward half-swizzle pumps on a circle ',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Moving forward to backward two-foot turn',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Backward one-foot glides',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Forward slalom',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [
                'name'=>'Two-foot spin',
                'skill_category_id'=>5,
                'point_value'=>1
            ]
            //Basic 3
        ]);
    }
}
