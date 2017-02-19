<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('administered_by')->nullable();//governing organization
            $table->unsignedInteger('discipline_id')->nullable();
            $table->boolean('is_coaching_track')->default(false);
            $table->boolean('is_test_track')->default(false);
            $table->boolean('is_introduction_track')->default(false);//like Learn to Skate
            $table->boolean('is_active')->default(true);//l
            $table->timestamps();
            //
            //
            $table->foreign('discipline_id')->references('id')->on('skating_disciplines');
            $table->foreign('administered_by')->references('id')->on('governing_organizations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skating_programs');
    }
}
