<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachResourcesForSkatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_resources_for_skaters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('resource_url');
            $table->unsignedInteger('added_by_coach');
            $table->boolean('is_public')->default(false);//whether non-students can see
            $table->boolean('is_deleted')->default(false);//

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coach_resources_for_skaters');
    }
}
