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
         Schema::create('subtipo', function (Blueprint $table) {
            $table->increments('nSTipCod');
            $table->integer('nTipoCod');
            $table->string('cSTipDes');
            $table->integer('tSTipFcre');
            $table->integer('tSTipFmod');
            $table->primary('nSTipCod');
            $table->foreign('nTipoCod')->references('nTipoCod')->on('tipo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtipo');
    }
}
