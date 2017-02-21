<?php

use Illuminate\Database\Seeder;

class userTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            [
                'name'=>'skater',
                'description'=>'This represents a skater who is not a coach.'
            ],
            [
                'name'=>'coach',
                'description'=>'This represents a skater who is a skater and a coach.'
            ],
            [
                'name'=>'admin',
                'description'=>'Has ability to administer the app.'
            ]
        ]);
        //
    }
}
