<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationPermissionSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_permission_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('created_by');
            $table->string('nickname')->nullable;
            $table->boolean('save_for_coach_lookup')->default(true);
            $table->boolean('can_schedule_own_lessons')->default(false);
            $table->boolean('lesson_scheduling_requires_approval')->default(false);
            $table->boolean('can_schedule_tests')->default(false);
            $table->boolean('can_schedule_competitions')->default(false);
            $table->boolean('can_canel_other_lessons')->default(false);
            $table->boolean('can_view_skater_lesson_notes')->default(false);
            $table->boolean('can_supervise_test')->default(false);
            $table->boolean('can_supervise_competitions')->default(false);
            $table->boolean('can_supervise_comp_practice')->default(false);
            $table->boolean('can_add_coaches')->default(false);
            $table->boolean('can_delete_coaches')->default(false);
            $table->boolean('can_verify_achievements')->default(false);
            $table->timestamps();
            //
            //
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation_permission_sets');
    }
}
