<?php

use Illuminate\Database\Seeder;

class GoverningOrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('governing_organizations')->insert([
            [//1
                'name'=>'United States Figure Skating Association',
                'short_name'=>'USFSA',
                'website'=>'http://www.usfigureskating.org/',
                'country'=>'USA',
                'region'=>'CO',
                'postal'=>'80906',
                'municipality'=>'Colorado Springs',
                'street_address'=>'20 First Street'
           ],
            [//2
                'name'=>'International Skating Union',
                'short_name'=>'ISU',
                'website'=>'www.isu.org',
                'country'=>'CHE',
                'region'=>'',
                'postal'=>'1006',
                'municipality'=>'Lausanne',
                'street_address'=>'Avenue Juste-Olivier 17'
            ],
            [//3
                'name'=>'Professional Skater\'s Association',
                'short_name'=>'PSA',
                'website'=>'www.skatepsa.com/',
                'country'=>'USA',
                'region'=>'MN',
                'postal'=>'55902',
                'municipality'=>'Rochester',
                'street_address'=>'3006 Allegro Park Ln SW'
            ],
            [//4
                'name'=>'Learn To Skate USA',
                'short_name'=>'LTS',
                'website'=>'https://www.learntoskateusa.com/',
                'country'=>'USA',
                'region'=>'CO',
                'postal'=>'80937',
                'municipality'=>'Colorado Springs',
                'street_address'=>' P.O. Box 38820'
            ],
        ]);
    }
}
