<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(RepresentantesSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(ParaleloSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(EstudiantesSeeder::class);
    }
}
