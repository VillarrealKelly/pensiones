<?php

use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('especialidad')->insert(['esp_detalle'=>'Mecánica Automotriz']);
        DB::table('especialidad')->insert(['esp_detalle'=>'Mecánica Industrial']);
        DB::table('especialidad')->insert(['esp_detalle'=>'Contabilidad']);
        DB::table('especialidad')->insert(['esp_detalle'=>'Electricidad']);
        DB::table('especialidad')->insert(['esp_detalle'=>'Electrónica']);
        DB::table('especialidad')->insert(['esp_detalle'=>'Informática']);
    }
}
