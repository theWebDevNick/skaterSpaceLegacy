<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('discipline_id');
            $table->unsignedInteger('program_id')->nullable();
            $table->boolean('is_terminal_level')->default(false);
            $table->boolean('verification_required')->default(false);
            $table->smallInteger('relative_weight')->default(1);
            $table->timestamps();
            //
            $table->foreign('discipline_id')->references('id')->on('skating_disciplines');
            $table->foreign('program_id')->references('id')->on('skating_programs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skating_levels');
    }
}
