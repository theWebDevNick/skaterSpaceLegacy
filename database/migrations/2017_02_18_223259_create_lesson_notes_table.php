<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('for_lesson');
            $table->string('title')->nullable();
            $table->text('body');
            $table->unsignedInteger('spawned_thread')->nullable;
            $table->boolean('is_private')->default(true);
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
            //
            //
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('for_lesson')->references('id')->on('lessons');
            $table->foreign('spawned_thread')->references('id')->on('message_threads');
            $table->index('for_lesson');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_notes');
    }
}
