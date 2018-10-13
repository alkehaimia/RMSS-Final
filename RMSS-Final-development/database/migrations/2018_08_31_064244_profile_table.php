<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // creates profile table
        Schema::create('Profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First name');
            $table->string('Last Name');
            $table->string('Location');
            $table->string('Area of Interest');
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
        Schema::dropIfExists('Profile');
    }
}
