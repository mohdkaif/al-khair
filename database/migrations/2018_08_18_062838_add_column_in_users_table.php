<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('name');
            $table->string('last_name')->after('first_name');
            $table->string('country_code')->after('email');
            $table->string('mobile_number')->after('email');
            $table->string('profile_picture')->after('password');
            $table->string('otp')->after('password');
            $table->enum('type',['admin','associate','investor','tender','user','shop_keeper'])->default('user')->after('password');
            $table->enum('status',['active','inactive','pending','trashed'])->default('active')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('country_code');
            $table->dropColumn('mobile_number');
            $table->dropColumn('profile_picture');
            $table->dropColumn('otp');
            $table->dropColumn('type');
            $table->dropColumn('status');
        });
    }
}
