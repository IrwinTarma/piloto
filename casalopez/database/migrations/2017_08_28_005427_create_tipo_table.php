<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Tipos', function (Blueprint $table) {
            $table->increments('nTipoCod')->unsigned();
            $table->string('cTipoDesc');
            //$table->timestamps();
            //$table->dateTime('tTipoFCre');
            //$table->dateTime('tTipoFMod');
                       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tipos');
    }
}
