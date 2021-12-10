<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendonor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('hotline');
            $table->string('gender');
            $table->string('blood_type');
            $table->string('NIK');
            $table->integer('age');
            $table->integer('weight');
            $table->string('covid_infected');
            $table->string('form_pendonor');
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
        Schema::dropIfExists('pendonor');
    }
}
