<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductologTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('productolog', function (Blueprint $table) {
            $table->string('cProdCod');
            $table->integer('nSTipCod');
            $table->integer('nMedCod');
            $table->string('cProdDes');
            $table->integer('nProdPsigv');
            $table->integer('nProdPcigv');
            $table->integer('nProdPbod');
            $table->integer('nProdMgCom');
            $table->integer('nProdPpubl');
            $table->integer('nProdMgBod');
            $table->integer('nProdDBase');
            $table->integer('nProdPLista');
            $table->string('cProdCond');
            $table->integer('nProdDprom');
            $table->integer('nProdPNLista');
            $table->boolean('bProdProm'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productolog');
    }
}
