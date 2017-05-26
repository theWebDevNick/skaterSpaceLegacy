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
            [//1
                'name'=>'Sit on Ice and Stand Up',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//2
                'name'=>'March Forward Across the Ice',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//3
                'name'=>'Forward Two-Foot Glide',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//4
                'name'=>'Dip',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//5
                'name'=>'Forward Swizzles',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//6
                'name'=>'Backward Wiggles',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//7
                'name'=>'Beginning snowplow stop on two feet or one foot',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//8
                'name'=>'Two-Foot Hop in Place',
                'skill_category_id'=>1,
                'point_value'=>1
            ],
            //Skills from Basic 2
            [//9
                'name'=>'Scooter Pushes',
                'skill_category_id'=>5,
                'point_value'=>2
            ],
            [//10
                'name'=>'Forward One-Foot Glides',
                'skill_category_id'=>5,
                'point_value'=>2
            ],
            [//11
                'name'=>'Backward two-foot glides',
                'skill_category_id'=>4,
                'point_value'=>2
            ],
            [//12
                'name'=>'Rocking Horse',
                'skill_category_id'=>4,
                'point_value'=>2
            ],
            [//13
                'name'=>' Backward swizzles',
                'skill_category_id'=>4,
                'point_value'=>2
            ],
            [//14
                'name'=>'Two-foot turns from forward to backward in place',
                'skill_category_id'=>3,
                'point_value'=>2
            ],
            [//15
                'name'=>'Moving snowplow stop (forward)',
                'skill_category_id'=>6,
                'point_value'=>2
            ],
            [//16
                'name'=>'Curves',
                'skill_category_id'=>4,
                'point_value'=>2
            ],

            //Basic 3
            [//17
                'name'=>'Beginning forward stroking showing correct use of blade',
                'skill_category_id'=>5,
                'point_value'=>3
            ],
            [//18
                'name'=>'Forward half-swizzle pumps on a circle ',
                'skill_category_id'=>5,
                'point_value'=>3
            ],
            [//19
                'name'=>'Moving forward to backward two-foot turn',
                'skill_category_id'=>3,
                'point_value'=>3
            ],
            [//20
                'name'=>'Beginning Backward one-foot glides',
                'skill_category_id'=>5,
                'point_value'=>3
            ],
            [//21
                'name'=>'Backward snowplow stop',
                'skill_category_id'=>4,
                'point_value'=>3
            ],
            [//22
                'name'=>'Forward slalom',
                'skill_category_id'=>5,
                'point_value'=>3
            ],
            [//23
                'name'=>'Forward Pivots',
                'skill_category_id'=>3,
                'point_value'=>3
            ],
            //Basic 4
            [//24
            'name'=>' Forward outside edge on a circle',
            'skill_category_id'=>4,
            'point_value'=>4
            ],
            [//25
            'name'=>'Forward inside edge on a circle',
            'skill_category_id'=>4,
            'point_value'=>4
            ],
            [//26
            'name'=>'Forward crossovers',
            'skill_category_id'=>4,
            'point_value'=>4
            ],
            [//27
            'name'=>'Backward half swizzle pumps on a circle',
            'skill_category_id'=>4,
            'point_value'=>4
            ],
            [//28
            'name'=>'Backward one-foot glides',
            'skill_category_id'=>4,
            'point_value'=>4
            ],
            [//29
            'name'=>'Beginning two-foot spin',
            'skill_category_id'=>2,
            'point_value'=>4
            ],
            [//30
            'name'=>'Forward lunges',
            'skill_category_id'=>4,
            'point_value'=>4
            ],
            //Basic 5
            [//31
                'name'=>' Backward outside edge on a circle',
                'skill_category_id'=>4,
                'point_value'=>5
            ],
            [//32
                'name'=>' Backward inside edge on a circle',
                'skill_category_id'=>4,
                'point_value'=>5
            ],
            [//33
                'name'=>'Backward crossovers',
                'skill_category_id'=>4,
                'point_value'=>5
            ],
            [//34
                'name'=>'Forward outside three-turn',
                'skill_category_id'=>4,
                'point_value'=>5
            ],
            [//35
                'name'=>'Advanced two-foot spin',
                'skill_category_id'=>2,
                'point_value'=>5
            ],
            [//36
                'name'=>'Hockey stop',
                'skill_category_id'=>6,
                'point_value'=>5
            ],
            [//37
                'name'=>'Side toe hop',
                'skill_category_id'=>1,
                'point_value'=>5
            ],

            //Basic 6
            [//38
                'name'=>' Forward inside three-turn',
                'skill_category_id'=>3,
                'point_value'=>6
            ],
            [//39
                'name'=>'Moving backward to forward two-foot turn on a circle',
                'skill_category_id'=>3,
                'point_value'=>6
            ],
            [//40
                'name'=>'Backward stroking',
                'skill_category_id'=>4,
                'point_value'=>6
            ],
            [//41
                'name'=>'Beginning one-foot spin',
                'skill_category_id'=>2,
                'point_value'=>6
            ],
            [//42
                'name'=>'T-stops',
                'skill_category_id'=>6,
                'point_value'=>6
            ],
            [//43
                'name'=>'Bunny hop',
                'skill_category_id'=>1,
                'point_value'=>6
            ],
            [//44
                'name'=>'Forward spiral on a straight line',
                'skill_category_id'=>4,
                'point_value'=>6
            ],
            [//45
                'name'=>'Shoot the duck',
                'skill_category_id'=>4,
                'point_value'=>6
            ],
            //Adult skills--filling in the blanks
            [//46
                'name'=>'Falling and recovery; on ice',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//47
                'name'=>'Forward skating across the width of the ice',
                'skill_category_id'=>5,
                'point_value'=>1
            ],
            [//48
                'name'=>'Backward Skating',
                'skill_category_id'=>5,
                'point_value'=>1
            ],

        ]);
    }
}
