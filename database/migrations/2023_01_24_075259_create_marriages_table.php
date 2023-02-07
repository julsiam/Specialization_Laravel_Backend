<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('sex');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('birthdate');
            $table->string('birthplace');
            $table->string('idtype');
            $table->string('sfirstname');
            $table->string('smiddlename');
            $table->string('slastname');
            $table->string('marriageDate');
            $table->string('marriageplace');
            $table->string('purpose');
            $table->string('legalProceedings');
            $table->string('phone');
            $table->string('status');
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
        Schema::dropIfExists('marriages');
    }
};
