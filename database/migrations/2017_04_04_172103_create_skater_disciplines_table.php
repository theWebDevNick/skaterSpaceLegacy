<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkaterDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('skater_disciplines', function (Blueprint $table) {
            $table->unsignedInteger('skater_id');
            $table->unsignedInteger('discipline_id');
            $table->boolean('is_coaching')->default(false);
            $table->timestamps();
            $table->primary(['skater_id','discipline_id']);
            $table->foreign('skater_id')->references('id')->on('users');
            $table->foreign('discipline_id')->references('id')->on('skating_disciplines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('skater_disciplines');
    }
}
