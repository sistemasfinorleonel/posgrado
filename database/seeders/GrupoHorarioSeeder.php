<?php

namespace Database\Seeders;

use App\Models\GrupoHorario;
use Illuminate\Database\Seeder;

class GrupoHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        GrupoHorario::create(['docente_id'=>1,'programa_modulo_id'=>1]);
        GrupoHorario::create(['docente_id'=>1,'programa_modulo_id'=>2]);
        GrupoHorario::create(['docente_id'=>1,'programa_modulo_id'=>3]);
        GrupoHorario::create(['docente_id'=>2,'programa_modulo_id'=>4]);
        GrupoHorario::create(['docente_id'=>2,'programa_modulo_id'=>5]);
        GrupoHorario::create(['docente_id'=>2,'programa_modulo_id'=>6]);
        GrupoHorario::create(['docente_id'=>3,'programa_modulo_id'=>7]);
        GrupoHorario::create(['docente_id'=>3,'programa_modulo_id'=>8]);
        GrupoHorario::create(['docente_id'=>4,'programa_modulo_id'=>9]);
        GrupoHorario::create(['docente_id'=>4,'programa_modulo_id'=>10]);
        GrupoHorario::create(['docente_id'=>4,'programa_modulo_id'=>11]);
        GrupoHorario::create(['docente_id'=>4,'programa_modulo_id'=>12]);
    
    }
}
