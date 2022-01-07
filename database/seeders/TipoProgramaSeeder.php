<?php

namespace Database\Seeders;

use App\Models\TipoPrograma;
use Illuminate\Database\Seeder;

class TipoProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPrograma::create(['nombre'=>'MAESTRIA']);
        TipoPrograma::create(['nombre'=>'ESPECILAIDAD']);
        TipoPrograma::create(['nombre'=>'DOCTORADO']);
        TipoPrograma::create(['nombre'=>'DIPLOMADO']);
    
            }
}
