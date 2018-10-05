<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
          $table->increments('id');
          //$table->integer('userID');
          $table->string('firstName');
          $table->string('lastName');
          $table->string('currentJob');
          $table->string('previousJob');
          $table->string('location');
          $table->string('areaOfWork');
          $table->string('jobPreference');
          $table->string('bioDescription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
