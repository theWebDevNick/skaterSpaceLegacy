<?php

use Illuminate\Database\Seeder;

class skatingClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('skating_clubs')->insert([
            'name'=>'Wichita Figure Skating Club',
            'short_name'=>'WFSC',
            'website'=>'http://wichitafsc.com',
            'logo_url'=>'',
            'organization_affiliation'=>1,
            'country'=>'USA',
            'region'=>'KS',
            'postal'=>'67218',
            'municipality'=>'KS',
            'street_address'=>'5028 E Gilbert Ct.',
        ]);
    }
}
