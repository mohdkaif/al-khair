<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableDoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hospitals', function(Blueprint $table)
        {
            $table->dropColumn('description');
        });

        Schema::table('hospitals', function(Blueprint $table)
        {
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('hospitals', function(Blueprint $table)
        {
            $table->dropColumn('description');
        });

        Schema::table('hospitals', function (Blueprint $table) {
            $table->string('description')->nullable();
        });
    }
}
