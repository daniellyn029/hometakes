<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompletedTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vw_completed_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('final_data');
            $table->string('music');
            $table->string('mls_notify');
            $table->string('mls_id');
            $table->enum('mls_images');
            $table->enum('uploadagent');
            $table->string('gallery');
            $table->string('amenities_id');
            $table->string('at_name');
            $table->string('tt_name');
            $table->string('town_id');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('utube');
            $table->string('script');
            $table->string('realtorcom');
            $table->string('mls_link');
            $table->string('notes');
            $table->string('u_notes');
            
            
            // $table->string('email')->unique();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vw_completed_tours');
    }
}
