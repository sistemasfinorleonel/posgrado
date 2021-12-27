<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Docente::factory(10)->create();
    }
}
