<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensiones extends Model
{
    //
    public $timestamps=false;
    protected $table='pensiones';
    protected $primaryKey='rep_id';

    protected $fillable = ['rep_nombre','rep_apellido','rep_cedula','rep_fecha'];
}
