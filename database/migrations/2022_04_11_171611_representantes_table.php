<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //
        Schema::create('representantes', function (Blueprint $table) {
            $table->id('rep_id');
            $table->string('rep_nombre');
            $table->string('rep_apellido');
            $table->string('rep_cedula')->unique();
            $table->date('rep_fecha');

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
         Schema::dropIfExists('representantes');
    }
}
