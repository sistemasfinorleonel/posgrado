<?php

namespace Database\Seeders;

use App\Models\ExperienciaLaboral;
use Illuminate\Database\Seeder;

class ExperienciaLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExperienciaLaboral::create(['empresa'=>'Alumglass','cargo'=>'gerente de comunicaciones','fechaInicial'=>'2020/01/01','fechaFinal'=>'2021/11/21','docente_id'=>1]);
    }
}
