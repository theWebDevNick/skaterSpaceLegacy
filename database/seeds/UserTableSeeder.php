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
                'email'=>'nickccoates+123@gmail.com',
                'date_of_birth' =>'1992-03-04',
                'zip'=>'67213',
                'user_type'=>1,
                'is_email_verified' =>true,
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
                'home_timezone'=>'America/Chicago',
                'password'=>bcrypt('2sd32sd3'),
                'is_coach'=>true,
                'page_slug'=>'larene_daisy_ks',
                'profile_pic_url'=>'',
                'bio'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet est lectus. Nulla tempus purus a dui sollicitudin viverra. Donec et elit at massa fermentum suscipit. Donec ultrices leo in hendrerit maximus. Phasellus malesuada faucibus enim, sed pellentesque eros placerat condimentum. Proin interdum lectus in nulla lobortis, a euismod mi lobortis. Suspendisse potenti. Quisque et augue id lorem luctus imperdiet. Pellentesque hendrerit justo neque, a varius orci elementum vel.</p><p>Maecenas in felis rutrum, luctus urna eget, sodales dui. Phasellus consectetur elit urna, vel imperdiet ante consectetur sed. Donec ultricies mauris tellus, vitae gravida dolor consectetur in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut leo felis, scelerisque a purus non, lacinia accumsan diam. Aliquam eleifend mi id dui tempor ultrices. Donec blandit a purus eget fringilla. Sed at urna facilisis diam vestibulum tristique in eget diam. Integer eget erat risus. Morbi non augue euismod, malesuada eros at, aliquet enim. Nunc pharetra dolor turpis, vitae tincidunt lacus hendrerit quis. Donec posuere condimentum pretium. Aenean ultricies metus libero, ac lobortis magna tincidunt eu.</p><p>Vestibulum scelerisque, augue eget volutpat imperdiet, justo ex pulvinar ligula, tristique euismod leo sapien vel quam. Mauris placerat, elit nec posuere aliquet, ante arcu convallis purus, quis luctus diam turpis eu lectus. Aenean nec aliquam erat, id egestas elit. Duis at gravida nisl, a dapibus lacus. Nunc vehicula lacus consequat justo scelerisque accumsan. Etiam et ipsum et sem mollis bibendum. Mauris consequat tristique dui in faucibus. Vivamus dignissim, magna elementum accumsan volutpat, nulla nisl egestas massa, non sodales nunc est vitae est. In quis ligula non felis tempus pharetra. Morbi imperdiet massa sit amet turpis elementum, non commodo ipsum ultrices. Cras congue fermentum quam, sed porttitor nibh faucibus vel. Curabitur a maximus justo. Pellentesque a efficitur dui. Aliquam ut enim et sapien porta pellentesque in non diam. Cras ac elit porta lectus egestas malesuada.</p><p>Proin tincidunt ante sed aliquet venenatis. Cras ornare augue vel mauris efficitur, vitae placerat velit tempus. Mauris libero metus, lacinia quis imperdiet ac, sagittis malesuada mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras aliquet pretium velit ullamcorper gravida. Phasellus sed metus tellus. Aliquam imperdiet diam non libero consequat eleifend. Nunc sit amet elit quis augue molestie eleifend. Aenean lobortis turpis et eleifend suscipit. Duis nec ultricies nisi. Nam in felis volutpat, malesuada enim non, consectetur ligula. Fusce ipsum neque, venenatis sit amet mi vitae, sagittis aliquam nisl. Sed finibus placerat finibus. Nunc aliquam lacus at libero rutrum, nec tempor diam maximus. Maecenas a felis congue, pharetra mi nec, luctus lacus. Fusce libero lorem, aliquet congue odio at, malesuada dictum sapien.</p><p>Donec efficitur libero at est euismod imperdiet. Mauris imperdiet odio eu ultricies suscipit. Mauris lacinia tortor ipsum, eget vestibulum arcu maximus id. Nulla facilisi. In accumsan pulvinar eros sed scelerisque. Integer sollicitudin mi ac turpis facilisis, in malesuada leo ornare. Praesent justo neque, euismod eu consectetur ac, faucibus in diam. Fusce sit amet feugiat magna. Ut molestie mi magna, ac rhoncus urna euismod et. Proin pretium dui nec lacus scelerisque lobortis. Nulla vel sem lacus. Etiam vitae venenatis mauris, in volutpat nisl. Phasellus eu elementum est.</p>'

            ]



        ]);
        //
    }
}
