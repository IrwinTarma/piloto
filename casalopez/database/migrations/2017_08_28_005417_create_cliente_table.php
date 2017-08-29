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
            $table->increments('ncliecod')->unsigned();
            $table->string('cclietdoc');
            $table->string('ccliendoc');
            $table->string('ccliedesc');
            $table->string('ccliedirec');
            $table->string('cclieosb');
                               
            
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
