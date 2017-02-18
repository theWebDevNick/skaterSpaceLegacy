<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('coach_user_id')->unique();
            $table->string('page_slug')->unique();
            $table->text('coach_bio');
            $table->string('coach_pic_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            //
            //Foreign key constraints
            $table->foreign('coach_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coach_pages');
    }
}
