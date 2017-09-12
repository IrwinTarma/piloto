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
            $table->string('cClieTdoc');
            $table->string('cClieNdoc',8);
            $table->string('cClieDesc');
            $table->string('cClieDirec');
            $table->string('cClieObs')->nullable();
            $table->timestamps();

        });
/*
         Schema::table('Clientes', function (Blueprint $table){
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at')->nullable();
         });
*/
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
