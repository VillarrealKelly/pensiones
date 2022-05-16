<?php

use Illuminate\Database\Seeder;

class ParaleloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('paralelo')->insert(['par_detalle'=>'A']);
        DB::table('paralelo')->insert(['par_detalle'=>'B']);
        DB::table('paralelo')->insert(['par_detalle'=>'C']);
        DB::table('paralelo')->insert(['par_detalle'=>'D']);
        DB::table('paralelo')->insert(['par_detalle'=>'E']);
    }
}
