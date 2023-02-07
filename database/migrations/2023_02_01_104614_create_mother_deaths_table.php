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
        Schema::create('mother_deaths', function (Blueprint $table) {
            $table->string('sex');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('idtype');
            $table->string('mfname');
            $table->string('mmname');
            $table->string('mlname');
            $table->string('deathplace');
            $table->string('lateReg');
            $table->string('purpose');
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
        Schema::dropIfExists('mother_deaths');
    }
};
