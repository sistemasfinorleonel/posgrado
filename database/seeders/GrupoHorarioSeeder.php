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
        
        GrupoHorario::create(['aula'=>'s4','horario_id'=>1,'grupo_id'=>1]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>1,'grupo_id'=>2]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>1,'grupo_id'=>3]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>2,'grupo_id'=>4]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>2,'grupo_id'=>5]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>2,'grupo_id'=>6]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>3,'grupo_id'=>7]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>3,'grupo_id'=>8]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>4,'grupo_id'=>9]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>4,'grupo_id'=>10]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>4,'grupo_id'=>11]);
        GrupoHorario::create(['aula'=>'s4','horario_id'=>4,'grupo_id'=>12]);
    
    }
}
