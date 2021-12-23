<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveStokPlasmaBPositifFromUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('stok_plasma_a_positif')->nullable();
            $table->dropColumn('stok_plasma_a_negatif')->nullable();
            $table->dropColumn('stok_plasma_b_positif')->nullable();
            $table->dropColumn('stok_plasma_b_negatif')->nullable();
            $table->dropColumn('stok_plasma_ab_positif')->nullable();
            $table->dropColumn('stok_plasma_ab_negatif')->nullable();
            $table->dropColumn('stok_plasma_o_positif')->nullable();
            $table->dropColumn('stok_plasma_o_negatif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('stok_plasma_a_positif')->nullable();
            $table->integer('stok_plasma_a_negatif')->nullable();
            $table->integer('stok_plasma_b_positif')->nullable();
            $table->integer('stok_plasma_b_negatif')->nullable();
            $table->integer('stok_plasma_ab_positif')->nullable();
            $table->integer('stok_plasma_ab_negatif')->nullable();
            $table->integer('stok_plasma_o_positif')->nullable();
            $table->integer('stok_plasma_o_negatif')->nullable();
        });
    }
}
