<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalPracticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_practices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('skater_id');
            $table->dateTime('start_time');
            $table->integer('duration_minutes');
            $table->text('practice_notes')->nullable();
            $table->integer('points')->default(0);//point value is the duration_minutes*10 + sum of skill point_value from skills in lesson_tags pivot table
            $table->boolean('is_deleted');
            $table->timestamps();
            //
            //
            $table->foreign('skater_id')->references('id')->on('users');
            $table->index('skater_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_practices');
    }
}
