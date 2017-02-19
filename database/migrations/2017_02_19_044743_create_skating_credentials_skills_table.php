<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingCredentialsSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_credentials_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('credential_id');
            $table->unsignedInteger('skill_id');
            $table->smallInteger('display_order')->default(0);
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
            //
            $table->foreign('credential_id')->references('id')->on('skating_credentials');
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
        Schema::dropIfExists('skating_credentials_skills');
    }
}
