<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
          $table->increments('profile_ID');
          $table->integer('user_ID');
          $table->string('First_Name');
          $table->string('Last_Name');
          $table->Date('Date_of_Birth');
          $table->string('Sex');
          $table->string('Current_Job');
          $table->string('Location');
          $table->string('Area_of_Work');
          $table->string('Job_Preference');
          $table->string('Bio_Description');
          $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profile');
    }
}
