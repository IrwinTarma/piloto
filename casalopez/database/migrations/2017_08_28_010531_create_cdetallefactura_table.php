<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCdetallefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cdetallefactura', function (Blueprint $table) {
            $table->increments('nProAlmCod');
            $table->string('cProdCod');
            $table->integer('nAlmCod');
            $table->integer('nProdMin');
            $table->integer('nProdMax');
            $table->integer('nProdStock');
            
            //$table->primary('nProAlmCod');
            $table->foreign('cProdCod')->references('cProdCod')->on('producto');
            $table->foreign('nAlmCod')->references('nAlmCod')->on('almacen');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vdetallefactura');
    }
}
