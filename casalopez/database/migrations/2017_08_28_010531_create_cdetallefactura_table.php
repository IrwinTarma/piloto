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
            $table->string('cProdCod',10);
            $table->string('cCDFacCodArt');
            $table->string('cCDFacCodInt');
            $table->string('cCDFacDesc');
            $table->integer('nCDFacCant');
            $table->string('cCDFacPUni');
            $table->string('cCDFacPVen');
            $table->integer('nCDFacFecVen');
            $table->string('cCDFacObs');
            $table->string('cCDFacFIng');
            
            //$table->primary('nCDFacCod');
            $table->foreign('cCFacCod')->references('cCFacCod')->on('cfactura');
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
        Schema::dropIfExists('cdetallefactura');
    }
}
