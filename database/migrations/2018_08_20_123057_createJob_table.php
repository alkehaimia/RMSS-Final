<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID');
            $table->string('name');
            $table->string('currentJob');
            $table->string('currentJobTime');
            $table->string('previousJob');
            $table->string('previousJobTime');
            $table->string('location');
            $table->string('areaOfWork');
            $table->string('jobPreference');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
