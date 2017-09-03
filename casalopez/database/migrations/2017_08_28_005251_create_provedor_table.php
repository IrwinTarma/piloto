provedors<?php

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
         Schema::create('provedors', function (Blueprint $table) {
            $table->increments('nProvCod')->unsigned();
            $table->string('nProvRuc',11)->unique();
            $table->string('cProvNom');
            $table->string('cProvDir');
            $table->string('cProvTel',11);
            $table->string('cProvCel',11);
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
        Schema::dropIfExists('provedors');
    }
}
