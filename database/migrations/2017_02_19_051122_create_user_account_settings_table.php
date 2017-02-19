<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->boolean('email_opt_in')->default(false);
            $table->boolean('sms_opt_in')->default(false);
            $table->boolean('push_opt_in')->default(false);
            $table->boolean('notify_on_goal_completion')->default(true);
            $table->boolean('notify_on_skill_completions')->default(true);
            $table->boolean('notify_on_lesson_reminders')->default(true);
            $table->boolean('notify_on_new_message')->default(true);
            $table->string('dash_bg_color_hex',6)->nullable();
            $table->string('dash_nav_color_hex',6)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_account_settings');
    }
}
