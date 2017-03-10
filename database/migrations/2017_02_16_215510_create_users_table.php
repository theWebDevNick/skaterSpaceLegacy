<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->string('zip',10);
            $table->boolean('is_master_account')->default(false);
            $table->unsignedInteger('master_parent_account')->nullable();
            $table->unsignedInteger('user_type')->nullable();
            $table->boolean('is_email_verified')->default(false);
            $table->date('email_sent')->nullable();
            $table->boolean('email_send_success')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('home_timezone',20);
            $table->unsignedInteger('home_club')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //
            //foreign key constrains
            $table->foreign('master_parent_account')->references('id')->on('users');
            $table->foreign('home_club')->references('id')->on('skating_clubs');
            $table->foreign('user_type')->references('id')->on('user_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
