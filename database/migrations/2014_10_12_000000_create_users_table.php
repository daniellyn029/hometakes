<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vw_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('company');
            $table->timestamp('p_date');
            $table->timestamp('date');
            $table->string('fname');
            $table->string('lname');
            $table->string('mls_agent_id');
            $table->string('mls_area');
            $table->string('mls_address');
            $table->string('mls_login_id');
            $table->string('mls_login_pwd');
            $table->string('credentials');

            $table->string('phone');
            $table->string('assist_phone');
            $table->string('phone1_carrier');
            $table->string('phone2_carrier');
            $table->string('cell1_reminder');
            $table->string('cell2_reminder');
            // $table->string('active_sponsor');

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
        Schema::dropIfExists('vw_users');
    }
}
