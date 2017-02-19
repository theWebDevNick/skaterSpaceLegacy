<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachSkaterRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_skater_relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('skater_id');
            $table->unsignedInteger('coach_id');
            $table->unsignedInteger('requested_by');
            $table->unsignedInteger('last_updated_by')->nullable();
            $table->unsignedInteger('permission_set');
            $table->boolean('verified_by_coach');
            $table->boolean('verified_by_skater');
            $table->string('relation_nickname')->nullable();
            $table->boolean('is_primary_coach');
            $table->boolean('is_current_coach');
            $table->timestamps();
            //
            //Foreign key constraints
            $table->foreign('coach_id')->references('id')->on('users');
            $table->foreign('skater_id')->references('id')->on('users');
            $table->foreign('requested_by')->references('id')->on('users');
            $table->foreign('last_updated_by')->references('id')->on('users');
            $table->foreign('permission_set')->references('id')->on('relation_permission_sets');
            $table->unique(['coach_id','skater_id']);
            $table->index(['coach_id','skater_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coach_skater_relationships');
    }
}
