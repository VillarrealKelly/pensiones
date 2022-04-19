<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    //
      public $timestamps=false;
    protected $table='Estudiantes';
    protected $primaryKey='est_id';

    protected $fillable = ['est_nombre','est_apellido','est_cedula','est_curso','est_paralelo','est_especialidad','est_fecha','rep_id'];
}
