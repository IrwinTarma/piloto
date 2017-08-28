<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('vfactura', function (Blueprint $table) {
            $table->string('cVFacCod');
            $table->integer('nClieCod');
            $table->integer('nVFacFemi');
            $table->integer('nVFacSTot');
            $table->integer('nVFacIgv');
            $table->integer('nVFacVTot');
            $table->primary('nprodpnlista');
            $table->foreign('nClieCod')->references('nClieCod')->on('cliente');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vfactura');
    }
}
