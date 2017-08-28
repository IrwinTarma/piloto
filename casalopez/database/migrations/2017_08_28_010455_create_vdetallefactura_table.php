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
         Schema::create('vdetallefactura', function (Blueprint $table) {
            $table->integer('nVDFacCod');
            $table->string('cVFacCod');
            $table->string('cProdCod');
            $table->integer('nVDFacCant');
            $table->integer('nVDFacUni');
            $table->integer('nVDFacDesc');
            $table->integer('nVDFacPVen');

            $table->primary('nVDFacCod');
            $table->foreign('cVFacCod')->references('cVFacCod')->on('vfactura');
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
        Schema::dropIfExists('vdetallefactura');
    }
}
