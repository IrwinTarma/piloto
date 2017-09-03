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
         Schema::create('productologs', function (Blueprint $table) {
            $table->string('cProdCod',10);
            $table->integer('nSTipCod');
            $table->double('nMedCod', 15, 8);
            $table->string('cProdDes');
            $table->integer('dProdPsigv');
            $table->integer('dProdPcigv');
            $table->integer('dProdPbod');
            $table->integer('dProdMgCodist');
            $table->integer('dProdPpubl');
            $table->integer('dProdMgBod');
            $table->integer('dProdDBase');
            $table->integer('dProdPLista');
            $table->string('cProdCond');
            $table->integer('dProdDprom');
            $table->integer('dProdPNLista');
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
        Schema::dropIfExists('productologs');
    }
}
