<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_listing', function (Blueprint $table) {
            $table->increments('Job_Listing_id');
            $table->integer('User_id');
            $table->string('Job_Name');
            $table->string('Job_Company');
            $table->string('Job_Area');
            $table->string('Job_Hours');
            $table->string('Contact_Information');
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
        Schema::dropIfExists('job_listing');
    }
}
