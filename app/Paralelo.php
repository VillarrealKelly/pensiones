<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model
{
    //
         public $timestamps=false;
    protected $table='paralelo';
    protected $primaryKey='par_id';

    protected $fillable = ['par_detalle'];
}
