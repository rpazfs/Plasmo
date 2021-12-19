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
            $table->string('username', 255)->unique();
            $table->string('name', 255);
            $table->string('hotline');
            $table->string('form_name', 255);
            $table->string('NIK', 16);
            $table->string('gender');
            $table->integer('hospital');
            $table->integer('hospital_room');
            $table->integer('age');
            $table->integer('weight');
            $table->integer('height');
            $table->string('TPK_form')->nullable();
            $table->boolean('vaccinated');
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
