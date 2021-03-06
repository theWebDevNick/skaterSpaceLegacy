<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique;
            $table->unsignedInteger('skating_level')->nullable();
            $table->unsignedInteger('program_id')->nullable();
            $table->unsignedInteger('granting_org')->nullable();
            $table->integer('progression')->nullable();
            $table->boolean('require_skills_completion')->default(true);
            $table->boolean('is_coaching_credential')->default(false);
            $table->boolean('expires')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            //
            $table->foreign('skating_level')->references('id')->on('skating_levels');
            $table->foreign('program_id')->references('id')->on('skating_programs');
            $table->foreign('granting_org')->references('id')->on('governing_organizations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skating_achievements');
    }
}
