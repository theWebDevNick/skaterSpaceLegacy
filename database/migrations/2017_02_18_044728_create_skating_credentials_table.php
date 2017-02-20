<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_credentials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique;
            $table->unsignedInteger('skating_level')->nullable();
            $table->unsignedInteger('program_id')->nullable();
            $table->unsignedInteger('granting_org')->nullable();
            $table->boolean('require_skills_completion')->default(true);
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
        Schema::dropIfExists('skating_credentials');
    }
}
