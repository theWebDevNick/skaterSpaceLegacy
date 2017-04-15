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
            $table->string('first_name',150);
            $table->string('last_name',150);
            $table->string('email',150)->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('municipality')->nullable();
            $table->char('region',2)->nullable();
            $table->string('zip',6);
            $table->decimal('latitude',9,5)->nullable();
            $table->decimal('longitude',9,5)->nullable();
            $table->boolean('is_master_account')->default(false);
            $table->unsignedInteger('master_parent_account')->nullable();
            $table->unsignedInteger('user_type')->nullable();
            $table->boolean('is_email_verified')->default(false);
            $table->dateTime('email_sent')->nullable();
            $table->char('email_token',25)->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('home_timezone',20)->default('UTC');
            $table->unsignedInteger('home_club')->nullable();
            $table->string('psa_number')->nullable();
            $table->string('usfsa_number')->nullable();
            $table->boolean('is_coach')->default(false);
            $table->boolean('is_coach_validated')->default(false);
            $table->text('bio')->nullable();//for coaches, for now
            $table->string('page_slug')->unique()->nullable();//for coaches, for now
            $table->string('profile_pic_url')->unique()->nullable();//for coaches, for now
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
