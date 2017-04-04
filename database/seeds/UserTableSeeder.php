<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

                'first_name'=>'Nicholas',
                'last_name'=>'Coates',
                'home_club'=>1,
                'email'=>'nickccoates@gmail.com',
                'date_of_birth' =>'1992-03-04',
                'zip'=>'67213',
                'user_type'=>1,
                'is_email_verified' =>true,
                'email_send_success'=>true,
                'home_timezone'=>'America/Chicago',
                'password'=>bcrypt('1as21as2'),
                'is_coach'=>false,
                'page_slug'=>null,
                'profile_pic_url'=>null,
                'bio'=>null

            ],
            [

                'first_name'=>'Larene',
                'last_name'=>'Daisy',
                'home_club'=>1,
                'email'=>'rene@example.com',
                'date_of_birth' =>'1942-11-05',
                'zip'=>'67213',
                'user_type'=>2,
                'is_email_verified' =>true,
                'email_send_success'=>true,
                'home_timezone'=>'America/Chicago',
                'password'=>bcrypt('2sd32sd3'),
                'is_coach'=>true,
                'page_slug'=>'larene_daisy_ks',
                'profile_pic_url'=>'',
                'bio'=>'This is my full bio'

            ]



        ]);
        //
    }
}
