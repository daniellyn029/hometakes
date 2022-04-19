<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vw_pending_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('final_date');
            $table->string('fname');
            $table->string('lname');
            // $table->string('type');
            $table->string('music');
            $table->string('tour');
            $table->string('video_tour');
            $table->string('at_name');
            $table->string('tt_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->int('zip');
            $table->string('gate_code');
            $table->string('notes');
            // $table->string('field');
            $table->string('gallery');
            $table->string('realtorcom');
            $table->string('mls_id');
            $table->string('utube');
            $table->string('u_notes');
            $table->string('film_date_1');
            $table->string('film_time_1');

            
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('vw_pending_tours');
    }
}
