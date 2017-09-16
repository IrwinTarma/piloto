<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Subtipos', function (Blueprint $table) {
            $table->increments('nSTipCod')->unsigned();
            $table->integer('nTipoCod')->unsigned();
            $table->string('cSTipDes');
            /*$table->integer('tSTipFcre');
            $table->integer('tSTipFmod');*/
            
            $table->foreign('nTipoCod')->references('nTipoCod')->on('Tipos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Subtipos');
    }
}
