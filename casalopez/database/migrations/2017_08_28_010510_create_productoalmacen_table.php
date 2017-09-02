<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoalmacenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('productoalmacen', function (Blueprint $table) {
            $table->increments('nProAlmCod')->unsigned();
            $table->string('cProdCod',10);
            $table->integer('nAlmCod')->unsigned();
            $table->integer('nProdAlmMin');
            $table->integer('nProdAlmMax');
            $table->integer('nProdAlmStock');
            
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
