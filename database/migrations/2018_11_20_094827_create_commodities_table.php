<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_magazynu'); //foreign

            $table->string('numer_katalogowy');
            $table->string('nazwa');
            $table->decimal('cena_jednostkowa', 8, 2);
            $table->decimal('ilosc_na_stanie',8,2);
            $table->string('jednostka_miary');
            $table->decimal('max_ilosc', 8,2);
            $table->decimal('min_ilosc', 8, 2);
            $table->boolean('czy_ostrzegac_o_nadmiarze');
            $table->boolean('czy_ostrzegac_o_niedomiarze');
            $table->string('kod_lokalizacji');

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
        Schema::dropIfExists('commodities');
    }
}
