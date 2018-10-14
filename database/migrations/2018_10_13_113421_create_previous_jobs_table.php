<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_jobs', function (Blueprint $table) {
          $table->increments('Pjob_id');
          $table->integer('profile_ID');
          $table->integer('User_ID');
          $table->string('Job_Name');
          $table->string('Job_Company');
          $table->string('Duration');
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
        Schema::dropIfExists('previous_jobs');
    }
}
