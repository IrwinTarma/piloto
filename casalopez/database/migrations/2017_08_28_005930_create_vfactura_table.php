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
         Schema::create('vfactura', function (Blueprint $table) {
            $table->string('cVFacCod',10);
            $table->integer('nClieCod')->unsigned();
            $table->double('nVFacFemi', 15, 8);
            $table->double('nVFacSTot',15,8);
            $table->double('nVFacIgv',15,8);
            $table->double('nVFacVTot',15,8);
            $table->primary('cVFacCod');
            $table->foreign('nClieCod')->references('nClieCod')->on('cliente');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vfactura');
    }
}
