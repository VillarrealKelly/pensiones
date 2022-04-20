<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensiones extends Model
{
    //
    public $timestamps=false;
    protected $table='pensiones';
    protected $primaryKey='pen_id';

    protected $fillable = ['pen_cantidad','pen_fecha','pen_cant_paga','pen_estado','usu_id','est_id'];
}
