<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
         	'usu_nombre'=>'administrador',
         	'usu_apellido'=>'Villarreal',
         	'usu_cedula'=>'1715093520',
         	'email'=>'Kelly@gmail.com',
         	'password'=>bcrypt('1715093520'),
         	'created_at'=>date('Y-m-d H:i'),
         	
         ]);

    }
}
