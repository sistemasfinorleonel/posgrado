<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Docente;
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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(ProgramaSeeder::class);
    }
}
