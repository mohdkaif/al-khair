<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableHospitals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctors', function(Blueprint $table)
        {
            $table->dropColumn('qualifications');
            $table->dropColumn('specifications')->nullable();
        });

        Schema::table('doctors', function(Blueprint $table)
        {
            $table->text('qualifications');
            $table->text('specifications')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('doctors', function(Blueprint $table)
        {
            $table->dropColumn('qualifications');
            $table->dropColumn('specifications')->nullable();
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->string('qualifications');
            $table->string('specifications')->nullable();
        });
    }
}
