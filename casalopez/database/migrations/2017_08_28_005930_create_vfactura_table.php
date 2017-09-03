<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('vfacturas', function (Blueprint $table) {
            $table->string('cVFacCod',10);
            $table->integer('nClieCod')->unsigned();
            $table->double('dVFacFemi', 15, 8);
            $table->double('dVFacSTot',15,8);
            $table->double('dVFacIgv',15,8);
            $table->double('dVFacVTot',15,8);
            $table->primary('cVFacCod');
            $table->foreign('nClieCod')->references('nClieCod')->on('clientes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vfacturas');
    }
}
