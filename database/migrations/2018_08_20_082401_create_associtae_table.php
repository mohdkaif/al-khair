<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssocitaeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('user_id');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country_code');
            $table->string('mobile_number');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('post_code');
            $table->string('gender');
            $table->string('dob');
            $table->enum('status',['active','inactive','pending','trashed'])->default('active');
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
        Schema::dropIfExists('associate');
    }
}
