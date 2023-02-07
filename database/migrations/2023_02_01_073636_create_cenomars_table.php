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
        Schema::create('cenomars', function (Blueprint $table) {
            $table->id();
            $table->string('sex');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('birthdate');
            $table->string('birthplace');
            $table->string('idtype');
            $table->string('ffname');
            $table->string('fmname');
            $table->string('flname');
            $table->string('mfname');
            $table->string('mmname');
            $table->string('mlname');
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
        Schema::dropIfExists('cenomars');
    }
};
