<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create(['docente_id'=>1,'programa_modulo_id'=>1]);
        Grupo::create(['docente_id'=>1,'programa_modulo_id'=>2]);
        Grupo::create(['docente_id'=>1,'programa_modulo_id'=>3]);
        Grupo::create(['docente_id'=>2,'programa_modulo_id'=>4]);
        Grupo::create(['docente_id'=>2,'programa_modulo_id'=>5]);
        Grupo::create(['docente_id'=>2,'programa_modulo_id'=>6]);
        Grupo::create(['docente_id'=>3,'programa_modulo_id'=>7]);
        Grupo::create(['docente_id'=>3,'programa_modulo_id'=>8]);
        Grupo::create(['docente_id'=>4,'programa_modulo_id'=>9]);
        Grupo::create(['docente_id'=>4,'programa_modulo_id'=>10]);
        Grupo::create(['docente_id'=>4,'programa_modulo_id'=>11]);
        Grupo::create(['docente_id'=>4,'programa_modulo_id'=>12]);
    
    
    
        /*
        Grupo::create(['docente_id'=>2,'programa_id'=>2,'modulo_id'=>4]);
        Grupo::create(['docente_id'=>2,'programa_id'=>2,'modulo_id'=>5]);
        Grupo::create(['docente_id'=>2,'programa_id'=>2,'modulo_id'=>6]);
        Grupo::create(['docente_id'=>2,'programa_id'=>2,'modulo_id'=>7]);
    
        Grupo::create(['docente_id'=>3,'programa_id'=>3,'modulo_id'=>1]);
        Grupo::create(['docente_id'=>3,'programa_id'=>3,'modulo_id'=>2]);
        Grupo::create(['docente_id'=>3,'programa_id'=>3,'modulo_id'=>3]);
        Grupo::create(['docente_id'=>3,'programa_id'=>3,'modulo_id'=>4]);
    
        Grupo::create(['docente_id'=>4,'programa_id'=>4,'modulo_id'=>8]);
        Grupo::create(['docente_id'=>4,'programa_id'=>4,'modulo_id'=>9]);
        Grupo::create(['docente_id'=>4,'programa_id'=>4,'modulo_id'=>10]);
        Grupo::create(['docente_id'=>4,'programa_id'=>4,'modulo_id'=>11]);
    
    
*/    
    
    }
}
