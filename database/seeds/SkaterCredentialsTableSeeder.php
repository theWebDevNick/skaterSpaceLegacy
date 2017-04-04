<?php

use Illuminate\Database\Seeder;

class SkaterCredentialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skater_credentials')->insert([
            [
                'credential_id'=>1,
                'skater_id'=>1,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ],
            [
                'credential_id'=>2,
                'skater_id'=>1,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ],
            [
                'credential_id'=>1,
                'skater_id'=>2,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ],
            [
                'credential_id'=>2,
                'skater_id'=>2,
                'show_on_profile'=>true,
                'date_earned'=>'2017-01-01'
            ]
        ]);
    }
}
