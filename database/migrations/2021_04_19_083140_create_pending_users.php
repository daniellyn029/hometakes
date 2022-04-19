<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){


        Schema::create('vw_pending_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->timestamp('date');
            $table->string('username');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('company');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('notes');
            $table->string('headshot');
            $table->string('logo');
            $table->string('meet_agent');
            $table->string('itunes');
           
           

            
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
    public function down(){

        Schema::dropIfExists('vw_pending_users');
    }
}
