<?php

use Illuminate\Database\Seeder;

class skatingCredentialsSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skating_credentials_skills')->insert([
            [
                'credential_id'=>1,
                'skill_id'=>1,
                'display_order'=>1
            ],
            [
                'credential_id'=>1,
                'skill_id'=>2,
                'display_order'=>2
            ],
            [
                'credential_id'=>1,
                'skill_id'=>3,
                'display_order'=>3
            ],
            [
                'credential_id'=>1,
                'skill_id'=>4,
                'display_order'=>4
            ],
            [
                'credential_id'=>1,
                'skill_id'=>5,
                'display_order'=>5
            ],
            [
                'credential_id'=>1,
                'skill_id'=>6,
                'display_order'=>6
            ],
            [
                'credential_id'=>1,
                'skill_id'=>7,
                'display_order'=>7
            ],
            [
                'credential_id'=>1,
                'skill_id'=>8,
                'display_order'=>8
            ],
            [
                'credential_id'=>1,
                'skill_id'=>9,
                'display_order'=>9
            ]

        ]);
    }
}
