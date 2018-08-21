<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('associate_id');
            $table->string('name',100);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('email',100);
            $table->string('country_code');
            $table->string('mobile_number');
            $table->string('date_of_birth');
            $table->enum('gender',['male','female'])->default('male');
            $table->text('description');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('pin_code');
            $table->double('invested_amount');
            $table->double('yearly_interest_rate');
            $table->double('monthly_interest_rate');
            $table->double('weekly_interest_rate');
            $table->double('weekly_interest_rate');
            $table->enum('account_status',['open','closed','pending','trashed'])->default('open');
            $table->string('start_date');
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
        Schema::dropIfExists('investors');
    }
}
