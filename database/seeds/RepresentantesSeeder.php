<?php

use Illuminate\Database\Seeder;

class RepresentantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('representantes')->insert([
         	'rep_nombre'=>'Ana',
         	'rep_apellido'=>'Pastrano',
         	'rep_cedula'=>'1715093522',
            'rep_fecha'=>date('Y-m-d H:i'),
         	
         ]);
    }
}
