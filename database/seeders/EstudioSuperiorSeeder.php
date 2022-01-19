<?php

namespace Database\Seeders;

use App\Models\EstudioSuperior;
use Illuminate\Database\Seeder;

class EstudioSuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstudioSuperior::create(['nombre'=>'maestria en educacion superior','tipo'=>'doctorado','ciudad'=>'santa cruz','fechaResolucion'=>'2020/01/01','pais'=>'Bolivia','docente_id'=>1]);
        EstudioSuperior::create(['nombre'=>'en educacion de informatica','tipo'=>'diplomado','ciudad'=>'santa cruz','fechaResolucion'=>'2020/05/01','pais'=>'Bolivia','docente_id'=>2]);
        EstudioSuperior::create(['nombre'=>'comunicaciones','tipo'=>'maestria','ciudad'=>'santa cruz','fechaResolucion'=>'2020/08/01','pais'=>'Bolivia','docente_id'=>3]);
        EstudioSuperior::create(['nombre'=>'redes ','tipo'=>'diplomado','ciudad'=>'santa cruz','fechaResolucion'=>'2020/07/01','pais'=>'Bolivia','docente_id'=>4]);
        EstudioSuperior::create(['nombre'=>'educacion superior','tipo'=>'maestria','ciudad'=>'santa cruz','fechaResolucion'=>'2020/09/01','pais'=>'Bolivia','docente_id'=>5]);
        EstudioSuperior::create(['nombre'=>'diplomado en educacion','tipo'=>'doctorado','ciudad'=>'santa cruz','fechaResolucion'=>'2020/10/01','pais'=>'Bolivia','docente_id'=>6]);
        
    }
}
