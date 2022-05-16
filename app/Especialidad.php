<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
         public $timestamps=false;
    protected $table='especialidad';
    protected $primaryKey='esp_id';

    protected $fillable = ['esp_detalle'];
}
