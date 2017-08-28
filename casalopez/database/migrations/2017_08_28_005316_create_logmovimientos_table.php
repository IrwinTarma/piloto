<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogmovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logmovimientos', function (Blueprint $table) {
            $table->integer('nLMovCod');
            $table->integer('id');
            $table->string('cLogTabAfe');
            $table->string('cLogAcc');
            $table->timestamps();
            $table->primary('nLMovCod');
            $table->foreign('id')->references('id')->on('usuario')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logmovimientos');
    }
}
