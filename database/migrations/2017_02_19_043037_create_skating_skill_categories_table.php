<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingSkillCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_skill_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique;
            $table->unsignedInteger('skating_discipline_id')->nullable();
            $table->timestamps();
            //
            $table->foreign('skating_discipline_id')->references('id')->on('skating_disciplines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skating_skill_categories');
    }
}
