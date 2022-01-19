<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Docente;
use App\Models\ExperienciaLaboral;
use App\Models\Programa;
use App\Models\TipoPrograma;
use Database\Seeders\TipoProgramaSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
        Storage::deleteDirectory('public/programas');
        Storage::makeDirectory('public/programas');
        $this->call(PermisionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(TipoProgramaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(EstudioSuperiorSeeder::class);
        $this->call(ExperienciaLaboralSeeder::class);
        $this->call(ProgramaSeeder::class);
        $this->call(ModuloSeeder::class); 
        $this->call(ProgramaModuloSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(GrupoSeeder::class);
       
      }
}
 