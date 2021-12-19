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
            $table->string('nama_pendonor', 255);
            $table->string('hotline');            
            $table->string('NIK', 16);
            $table->string('gender');
            $table->integer('age');
            $table->string('blood_type');
            $table->string('rhesus');
            $table->integer('weight');
            $table->integer('height');
            $table->string('province');
            $table->string('city');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('alamat');
            $table->string('covid_infected');
            $table->string('donors');
            $table->string('donors_apheresis');
            $table->string('donors_hospital');
            $table->date('PCR_Positive');
            $table->date('PCR_Negative');
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
