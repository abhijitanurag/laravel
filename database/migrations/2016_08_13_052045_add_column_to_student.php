<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
           $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone');
            $table->string('batch_id');
            $table->date('dob');
            $table->string('gender');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['first_name','last_name','batch_id','dob','gender','phone']);
        });
    }
}
