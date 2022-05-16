<?php

use Illuminate\Database\Seeder;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('estudiantes')->insert([
         	'est_nombre'=>'Kelly',
         	'est_apellido'=>'Villarreal',
         	'est_cedula'=>'1715093521',
            'est_fecha'=>date('Y-m-d H:i'),
            'rep_id'=>1,
            'cur_id'=>1,
            'esp_id'=>1,
            'par_id'=>1,

        ]);

  

 

        
      


        //  DB::table('estudiantes')->insert(['est_fecha'=>date('Y-m-d H:i')]);
    }



}
