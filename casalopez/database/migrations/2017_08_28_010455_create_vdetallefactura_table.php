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
         Schema::create('vdetallefacturas', function (Blueprint $table) {
            $table->increments('nVDFacCod')->unsigned();
            $table->string('cVFacCod',10);
            $table->string('cProdCod',10);
            $table->integer('nVDFacCant');
            $table->integer('nVDFacUni');
            $table->integer('nVDFacDesc');
            $table->integer('nVDFacPVen');

            
            $table->foreign('cVFacCod')->references('cVFacCod')->on('vfacturas');
            $table->foreign('cProdCod')->references('cProdCod')->on('productos');
            
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
