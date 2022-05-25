<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('reporte', function (Blueprint $table) {
            $table->id('repo_id');
            $table->date('repo_fecha');
            $table->foreignId('pen_id')->references('pen_id')->on('pensiones');
 
        
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
           Schema::dropIfExists('reporte');
    }
}
