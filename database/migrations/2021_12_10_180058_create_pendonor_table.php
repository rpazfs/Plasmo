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
            $table->string('username', 255)->unique();
            $table->string('name', 255);
            $table->string('hotline');
            $table->string('gender');
            $table->string('rhesusblood_type');
            $table->string('NIK', 255);
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->string('covid_infected');
            $table->string('province');
            $table->string('city');
            $table->string('districts');
            $table->string('street');
            $table->string('donors');
            $table->string('donors_apheresis');
            $table->string('donors_hospital');
            $table->string('PCR_Positive');
            $table->string('PCR_Negative');
            $table->string('PCR_Positive_file')->nullable();
            $table->string('PCR_Negative_file')->nullable();
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
