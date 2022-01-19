<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horario::create(['dia'=>'LUNES','horaEntrada'=>'8:00','horaSalida'=>'10:00']);
        Horario::create(['dia'=>'LUNES','horaEntrada'=>'10:00','horaSalida'=>'12:00']);
        Horario::create(['dia'=>'LUNES','horaEntrada'=>'14:00','horaSalida'=>'16:00']);
        Horario::create(['dia'=>'LUNES','horaEntrada'=>'18:00','horaSalida'=>'20:00']);
    
        Horario::create(['dia'=>'MARTES','horaEntrada'=>'8:00','horaSalida'=>'10:00']);
        Horario::create(['dia'=>'MARTES','horaEntrada'=>'10:00','horaSalida'=>'12:00']);
        Horario::create(['dia'=>'MARTES','horaEntrada'=>'14:00','horaSalida'=>'16:00']);
        Horario::create(['dia'=>'MARTES','horaEntrada'=>'18:00','horaSalida'=>'20:00']);
   
        Horario::create(['dia'=>'MIERCOLES','horaEntrada'=>'8:00','horaSalida'=>'10:00']);
        Horario::create(['dia'=>'MIERCOLES','horaEntrada'=>'10:00','horaSalida'=>'12:00']);
        Horario::create(['dia'=>'MIERCOLES','horaEntrada'=>'14:00','horaSalida'=>'16:00']);
        Horario::create(['dia'=>'MIERCOLES','horaEntrada'=>'18:00','horaSalida'=>'20:00']);
   
        Horario::create(['dia'=>'JUEVES','horaEntrada'=>'8:00','horaSalida'=>'10:00']);
        Horario::create(['dia'=>'JUEVES','horaEntrada'=>'10:00','horaSalida'=>'12:00']);
        Horario::create(['dia'=>'JUEVES','horaEntrada'=>'14:00','horaSalida'=>'16:00']);
        Horario::create(['dia'=>'JUEVES','horaEntrada'=>'18:00','horaSalida'=>'20:00']);
   
        Horario::create(['dia'=>'VIERNES','horaEntrada'=>'8:00','horaSalida'=>'10:00']);
        Horario::create(['dia'=>'VIERNES','horaEntrada'=>'10:00','horaSalida'=>'12:00']);
        Horario::create(['dia'=>'VIERNES','horaEntrada'=>'14:00','horaSalida'=>'16:00']);
        Horario::create(['dia'=>'VIERNES','horaEntrada'=>'18:00','horaSalida'=>'20:00']);
   
    }
}
