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
         Schema::create('Productoalmacens', function (Blueprint $table) {
            $table->increments('nProAlmCod')->unsigned();
            $table->string('cProdCod',10);
            $table->integer('nAlmCod')->unsigned();
            $table->integer('nProdAlmMin');
            $table->integer('nProdAlmMax');
            $table->integer('nProdAlmStock');
            
            //$table->primary('nProAlmCod');
            $table->foreign('cProdCod')->references('cProdCod')->on('Productos');
            $table->foreign('nAlmCod')->references('nAlmCod')->on('Almacens');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productoalmacens');
    }
}
