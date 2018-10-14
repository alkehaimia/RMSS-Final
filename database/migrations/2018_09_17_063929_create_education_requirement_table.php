<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationRequirementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_requirement', function (Blueprint $table) {
            $table->increments('education_requirement_id');

            $table->integer('User_id');
            $table->integer('Job_Listing_id');
            $table->integer('Education_Required');
            $table->string('education_area');
            $table->integer('ERequirementFK');
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
        Schema::dropIfExists('education_requirement');
    }
}
