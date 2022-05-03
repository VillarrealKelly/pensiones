<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
        Schema::create('pensiones', function (Blueprint $table) {
            $table->id('pen_id');
            $table->string('pen_cantidad');
            $table->date('pen_fecha');
            $table->string('pen_cant_paga');
            $table->string('pen_estado');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('est_id')->references('est_id')->on('estudiantes');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('pensiones');
    }
}
