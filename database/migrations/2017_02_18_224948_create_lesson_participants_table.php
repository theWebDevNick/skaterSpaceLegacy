<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lesson');
            $table->unsignedInteger('participant');
            $table->unsignedInteger('last_update_by');
            $table->unsignedInteger('created_by');
            $table->boolean('is_student')->default(true);
            $table->boolean('is_instructor')->default(false);
            $table->boolean('accepted')->default(false);
            $table->boolean('rejected')->default(false);
            $table->boolean('removed')->default(false);
            $table->boolean('attended')->default(false);
            $table->unsignedInteger('attendance_verified_by')->nullable();
            $table->timestamps();
            //
            //
            $table->foreign('participant')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('last_update_by')->references('id')->on('users');
            $table->foreign('attendance_verified_by')->references('id')->on('users');
            $table->foreign('lesson')->references('id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_participants');
    }
}
