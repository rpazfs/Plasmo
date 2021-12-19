<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemohon', 255);
            $table->string('hotline');
            $table->string('nama_pasien', 255);
            $table->string('gender');            
            $table->integer('age');            
            $table->string('blood_type');
            $table->string('rhesus');
            $table->string('hospital');
            $table->string('hospital_room');
            $table->string('province');
            $table->string('city');
            $table->string('File_TPK')->nullable();
            $table->string('Link_TPK')->nullable();
            $table->integer('jumlah_plasma');
            $table->string('vaccinated');
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
        Schema::dropIfExists('pasien');
    }
}
