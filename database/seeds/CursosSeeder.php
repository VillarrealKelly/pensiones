<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cursos')->insert(['cur_detalle'=>'OCTAVO']);
        DB::table('cursos')->insert(['cur_detalle'=>'NOVENO']);
        DB::table('cursos')->insert(['cur_detalle'=>'DÉCIMO']);
        DB::table('cursos')->insert(['cur_detalle'=>'PRIMERO ']);
        DB::table('cursos')->insert(['cur_detalle'=>'SEGUNDO ']);
        DB::table('cursos')->insert(['cur_detalle'=>'TERCERO']);
    }
}
