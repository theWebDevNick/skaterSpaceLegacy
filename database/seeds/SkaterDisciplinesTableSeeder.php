<?php

use Illuminate\Database\Seeder;

class SkaterDisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skater_disciplines')->insert([
           [
               'skater_id'=>1,
               'discipline_id'=>2,
               'is_coaching'=>true
           ],
            [
               'skater_id'=>1,
               'discipline_id'=>3,
               'is_coaching'=>true
           ],
            [
               'skater_id'=>2,
               'discipline_id'=>4,
               'is_coaching'=>true
           ],
            [
               'skater_id'=>2,
               'discipline_id'=>5,
               'is_coaching'=>true
           ],
            [
               'skater_id'=>2,
               'discipline_id'=>1,
               'is_coaching'=>true
           ],
            [
               'skater_id'=>2,
               'discipline_id'=>3,
               'is_coaching'=>true
           ],
        ]);
    }
}
