<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cfactura', function (Blueprint $table) {
            $table->string('ccfaccod',10);
            $table->integer('nProvCod')->unsigned();
            $table->string('ccfacconven');
            $table->string('ccfacnped');
            $table->string('ccfacocom');
            $table->string('ccfacven');
            $table->dateTime('tcfacfec');
            $table->boolean('bcfaczon');
            $table->string('ccfaccli');
            $table->string('ccfacnguia');
            $table->string('ccfacimpbru');
            $table->string('ccfactotdes');
            $table->string('ccfacvalven');
            $table->string('ccfactotimp');
            $table->string('ccfacotrgas');
            $table->string('ccfacimppag');            
            $table->primary('ccfaccod');
            $table->foreign('nProvCod')->references('nProvCod')->on('provedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfactura');
    }
}
