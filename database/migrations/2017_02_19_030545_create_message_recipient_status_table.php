<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageRecipientStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('message_recipient_status', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('message');
            $table->unsignedInteger('user');
            $table->boolean('marked_as_read')->default(true);
            $table->timestamps();
            //
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('message')->references('id')->on('messages');
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
        Schema::dropIfExists('message_recipient_status');
    }
}
