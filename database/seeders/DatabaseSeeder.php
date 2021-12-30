<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Docente;
use App\Models\Programa;
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
        Storage::deleteDirectory('programas');
        
         Storage::makeDirectory('programas');
        $this->call(UserSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(CursoSeeder::class);
       $this->call(ProgramaSeeder::class);
    //    $this->call(ProgramaSeeder::class); 
    }
}
