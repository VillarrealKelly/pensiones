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
            'est_curso'=>'OCTAVO',
            'est_paralelo'=>'A',
            'est_especialidad'=>'Mecanica Automotriz',
            'est_fecha'=>date('Y-m-d H:i'),
            'rep_id'=>1,
        ]);

        // DB::table('estudiantes')->insert(['est_curso'=>'OCTAVO']);
        // DB::table('estudiantes')->insert(['est_curso'=>'NOVENO']);
        // DB::table('estudiantes')->insert(['est_curso'=>'DECIMO']);
        // DB::table('estudiantes')->insert(['est_curso'=>'PRIMERO ']);
        // DB::table('estudiantes')->insert(['est_curso'=>'SEGUNDO ']);
        // DB::table('estudiantes')->insert(['est_curso'=>'TERCERO']);

        // DB::table('estudiantes')->insert(['est_paralelo'=>'A']);
        // DB::table('estudiantes')->insert(['est_paralelo'=>'B']);
        // DB::table('estudiantes')->insert(['est_paralelo'=>'C']);
        // DB::table('estudiantes')->insert(['est_paralelo'=>'D']);
        // DB::table('estudiantes')->insert(['est_paralelo'=>'E']);

        
      
        // DB::table('estudiantes')->insert(['est_especialidad'=>'Mecanica Automotriz']);
        // DB::table('estudiantes')->insert(['est_especialidad'=>'Mecanica Industrial']);
        // DB::table('estudiantes')->insert(['est_especialidad'=>'Contabilidad']);
        // DB::table('estudiantes')->insert(['est_especialidad'=>'Electricidad']);
        // DB::table('estudiantes')->insert(['est_especialidad'=>'Electronica']);
        // DB::table('estudiantes')->insert(['est_especialidad'=>'Informatica']);


        //  DB::table('estudiantes')->insert(['est_fecha'=>date('Y-m-d H:i')]);
    }



}
