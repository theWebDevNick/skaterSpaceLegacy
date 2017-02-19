<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkaterLessonTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skater_lesson_tags', function (Blueprint $table) {
            $table->unsignedInteger('lesson_id');
            $table->unsignedInteger('skill_id');
            $table->primary(['lesson_id','skill_id']);
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('skill_id')->references('id')->on('skating_skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skater_lesson_tags');
    }
}
