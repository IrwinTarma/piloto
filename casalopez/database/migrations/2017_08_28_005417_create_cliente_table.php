<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Clientes', function (Blueprint $table) {
            $table->increments('nClieCod')->unsigned();
            $table->integer('nTdocCod')->unsigned();
            $table->string('cClieNdoc',11);
            $table->string('cClieDesc');
            $table->string('cClieDirec');
            $table->string('cClieObs')->nullable();
            //$table->primary('nClieCod');
            $table->foreign('nTdocCod')->references('nTdocCod')->on('tipodocs');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Clientes');
    }
}
