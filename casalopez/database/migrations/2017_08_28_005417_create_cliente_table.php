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
         Schema::create('cliente', function (Blueprint $table) {
            $table->increments('nClieCod')->unsigned();
            $table->string('cClieTdoc');
            $table->string('cClieNdoc');
            $table->string('cClieDesc');
            $table->string('cClieDirec');
            $table->string('cClieObs');
                               
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
