<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('provedor', function (Blueprint $table) {
            $table->increments('nProvCod')->unsigned();
            $table->integer('nProvRuc')->unique();
            $table->string('cProvNom');
            $table->string('cProvDir');
            $table->integer('nProvTel');
            $table->integer('nProvCel');
            $table->string('cProvEma');
            $table->string('cProvObs');
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
        Schema::dropIfExists('provedor');
    }
}
