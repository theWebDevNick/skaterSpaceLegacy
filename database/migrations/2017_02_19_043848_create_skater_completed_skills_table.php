<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkaterCompletedSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skater_completed_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('skater_id');
            $table->unsignedInteger('skill_id');
            $table->unsignedInteger('verified_by');
            $table->timestamps();
            //
            //
            $table->foreign('skill_id')->references('id')->on('skating_skills');
            $table->foreign('skater_id')->references('id')->on('users');
            $table->foreign('verified_by')->references('id')->on('users');
            $table->unique(['skater_id','skill_id']);
            $table->index(['skater_id','skill_id']);

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skater_completed_skills');
    }
}
