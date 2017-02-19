<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkaterWeeklyPracticeGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skater_weekly_practice_goals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('assigned_by');
            $table->unsignedInteger('assigned_to');
            $table->date('for_week_period_starting');
            $table->boolean('is_duration_based')->default(false);
            $table->smallInteger('goal_duration_minutes')->nullable();
            $table->boolean('is_discipline_based')->default(false);
            $table->unsignedInteger('goal_discipline_id')->default(false);
            $table->boolean('is_skill_based')->default(false);
            $table->unsignedInteger('goal_skill_id')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->boolean('is_completed')->default(false);
            $table->timestamps();
            //
            //foreign
            $table->foreign('assigned_by')->references('id')->on('users');
            $table->foreign('assigned_to')->references('id')->on('users');
            $table->foreign('goal_discipline_id')->references('id')->on('skating_disciplines');
            $table->foreign('goal_skill_id')->references('id')->on('skating_skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skater_weekly_practice_goals');
    }
}
