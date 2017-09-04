<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Cfacturas', function (Blueprint $table) {
            $table->string('cCFacCod',10);
            $table->integer('nProvCod')->unsigned();
            $table->string('cCFacNumFac');
            $table->string('cCFacConVen');
            $table->string('cCFacNped');
            $table->string('cCFacOcom');
            $table->string('cCFacVen');
            $table->dateTime('tCFacFec');
            $table->boolean('bCFacZon');
            $table->string('cCFacCli');
            $table->string('cCFacNguia');
            $table->string('cCFacImpBru');
            $table->string('cCFacTotDes');
            $table->string('cCFacValVen');
            $table->string('cCFacTotImp');
            $table->string('cCFacOtrGas');
            $table->string('cCFacImpPag');            
            $table->primary('cCFacCod');
            $table->foreign('nProvCod')->references('nProvCod')->on('Provedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfacturas');
    }
}
