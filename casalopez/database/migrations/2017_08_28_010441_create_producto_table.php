<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Productos', function (Blueprint $table) {
            $table->string('cProdCod',10);
            $table->integer('nSTipCod')->unsigned();
            //$table->integer('nMedCod')->unsigned();
            $table->string('cProdDes');
            $table->double('dProdPsigv',15,8);
            $table->double('dProdPcigv',15,8);
            $table->double('dProdPbod',15,8);
            $table->double('dProdMgCodist',15,8);
            $table->double('dProdPpubl',15,8);
            $table->double('dProdMgBod',15,8);
            $table->double('dProdDBase',15,8);
            $table->double('dProdPLista',15,8);
            $table->string('cProdCond');
            $table->double('dProdDprom',15,8);
            $table->double('dProdPNLista',15,8);
            $table->boolean('bProdProm');            


            $table->primary('cProdCod');
            $table->foreign('nSTipCod')->references('nSTipCod')->on('Subtipos');
            //$table->foreign('nMedCod')->references('nMedCod')->on('medida');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
