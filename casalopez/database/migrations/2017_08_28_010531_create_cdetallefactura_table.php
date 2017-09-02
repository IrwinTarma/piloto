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
            $table->increments('nCDFacCod');
            $table->string('cCFacCod',10);
            //$table->string('cProdCod',10);
            $table->string('cCDFacCodArt');
            $table->string('cCDFacCodInt');
            $table->string('cCDFacDesc');
            $table->integer('nCDFacUni');//fk
            $table->double('dCDFacCant',15,8);
            $table->string('dCDFacPUni');
            $table->string('dCDFacPorDes');
            $table->string('dCDFacPVen');            
            $table->string('cCDFacObs');
            $table->dateTime('tCDFacFReg');
            $table->integer('nProAlmCod')->unsigned();
            
            //$table->primary('nCDFacCod');
            $table->foreign('cCFacCod')->references('cCFacCod')->on('cfactura');
            $table->foreign('nProAlmCod')->references('nProAlmCod')->on('productoalmacen');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cdetallefactura');
    }
}
