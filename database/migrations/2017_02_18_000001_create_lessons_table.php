<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lesson_description')->nullable();
            $table->unsignedInteger('lesson_type');
            $table->dateTimeTz('start_time');
            $table->dateTimeTz('end_time');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('primary_instructor');
            $table->boolean('require_participant_confirmation')->default(true);
            $table->boolean('lesson_was_completed')->default(false);
            $table->boolean('lesson_was_cancelled')->default(false);
            $table->timestamps();
            //
            //
            $table->foreign('lesson_type')->references('id')->on('lesson_types');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('primary_instructor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
