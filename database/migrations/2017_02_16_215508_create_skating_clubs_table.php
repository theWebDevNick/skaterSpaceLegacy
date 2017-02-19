<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatingClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skating_clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('short_name',20)->unique();
            $table->string('website')->unique()->nullable();
            $table->string('logo_url')->unique()->nullable();
            $table->unsignedInteger('organization_affiliation')->nullable();
            $table->unsignedInteger('club_admin')->nullable();
            $table->char('country',3);
            $table->char('region')->nullable();
            $table->string('postal',10)->nullable();
            $table->string('municipality');
            $table->string('street_address');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            //
            //Foreign_keys
            $table->foreign('organization_affiliation')->references('id')->on('governing_organizations');
            //table->foreign('club_admin')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skating_clubs');
    }
}
