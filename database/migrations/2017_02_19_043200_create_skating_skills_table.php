<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('skill_category_id');
            $table->date('completion_date');
            $table->smallInteger('point_value')->nullable();//for achievements calculations
            $table->string('resource_url')->nullable();//like a test diagram
            $table->timestamps();
            //
            //
            $table->foreign('skill_category_id')->references('id')->on('skating_skill_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skating_skills');
    }
}
