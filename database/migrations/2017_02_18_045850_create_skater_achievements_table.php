<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkaterAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skater_achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('achievement_id');
            $table->unsignedInteger('skater_id');
            $table->boolean('show_on_profile')->nullable()->default(false);//for coaches only
            $table->date('date_earned');
            $table->date('expiration_date')->nullable();
            $table->unsignedInteger('endorsed_by')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            //
            //
            $table->foreign('achievement_id')->references('id')->on('skating_achievements');
            $table->foreign('skater_id')->references('id')->on('users');
            $table->unique(['achievement_id','skater_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skater_achievements');
    }
}
