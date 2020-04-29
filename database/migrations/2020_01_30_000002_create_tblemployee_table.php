<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblemployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblemployee', function (Blueprint $table) {
            $table->bigInteger('emplCode')->primary();
            $table->string('username')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->text('password');
            $table->string('gender');
            $table->string('department');
            $table->text('address');
            $table->bigInteger('mobileNumber')->unique();
            $table->date('dateOfBirth'); 
            $table->unsignedInteger('role_id')->index()->default('3');
            $table->foreign('role_id')->references('id')->on('roles');         
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
        Schema::dropIfExists('tblemployee');
    }
}
