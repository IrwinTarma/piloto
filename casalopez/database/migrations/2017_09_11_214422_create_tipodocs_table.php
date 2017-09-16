<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipodocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipodocs', function (Blueprint $table) {
            $table->increments('nTdocCod')->unsigned();;
            $table->string('cTdocSigla', 3)->unique();
            $table->string('cTdocDesc', 40);  
            $table->primary('nTdocCod');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipodocs');
    }
}
