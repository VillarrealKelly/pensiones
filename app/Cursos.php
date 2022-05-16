<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    //
         public $timestamps=false;
    protected $table='cursos';
    protected $primaryKey='cur_id';

    protected $fillable = ['cur_detalle'];
}
