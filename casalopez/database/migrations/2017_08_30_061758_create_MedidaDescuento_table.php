<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidaDescuentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('medidaproducto', function (Blueprint $table) {
            $table->increments('nMedProCod');
            $table->integer('nMedCod')->unsigned();
            $table->string('cProdCod',10);
            $table->double('dMedProPor',15,8);
            $table->integer('nMedProCanUni');
            
            $table->foreign('nMedCod')->references('nMedCod')->on('medida');
            $table->foreign('cProdCod')->references('cProdCod')->on('producto');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medidadescuento');
    }
}