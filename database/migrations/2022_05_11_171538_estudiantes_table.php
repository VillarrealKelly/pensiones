<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id('est_id');
            $table->string('est_nombre');
            $table->string('est_apellido');
            $table->string('est_cedula')->unique();
            $table->date('est_fecha');
            $table->foreignId('rep_id')->references('rep_id')->on('representantes');
            $table->foreignId('esp_id')->references('esp_id')->on('especialidad');
            $table->foreignId('cur_id')->references('cur_id')->on('cursos');
            $table->foreignId('par_id')->references('par_id')->on('paralelo');
            // $table->foreignId('cat_id')->references('cat_id')->on('categoria');
    
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
        Schema::dropIfExists('estudiantes');
    }
}
