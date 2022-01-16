<?php

namespace Database\Seeders;

use App\Models\ProgramaModulo;
use Illuminate\Database\Seeder;

class ProgramaModuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramaModulo::factory(30)->create();

    }
}
