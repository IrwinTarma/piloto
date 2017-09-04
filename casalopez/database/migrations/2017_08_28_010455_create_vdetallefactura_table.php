<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVdetallefacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Vdetallefacturas', function (Blueprint $table) {
            $table->increments('nVDFacCod')->unsigned();
            $table->string('cVFacCod',10);
            $table->string('cProdCod',10);
            $table->integer('nVDFacCant');
            $table->integer('nVDFacUni');
            $table->integer('nVDFacDesc');
            $table->integer('nVDFacPVen');

            
            $table->foreign('cVFacCod')->references('cVFacCod')->on('Vfacturas');
            $table->foreign('cProdCod')->references('cProdCod')->on('Productos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vdetallefacturas');
    }
}
