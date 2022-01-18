<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudiante::create(['Nregistro'=>'2170829','nombre'=>'leonel','paterno'=>'Chana','materno'=>'Cruz','email'=>'alv@gmail.com','telefono'=>'2432423','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170839','nombre'=>'lurdes','paterno'=>'Contreras','materno'=>'álvares','email'=>'alv1@gmail.com','telefono'=>'3542354','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170821','nombre'=>'jazmin','paterno'=>'Leon','materno'=>'Castillo','email'=>'alv2@gmail.com','telefono'=>'235243','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170822','nombre'=>'noelia','paterno'=>'Duarte','materno'=>'Castro','email'=>'alv3@gmail.com','telefono'=>'235323','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170823','nombre'=>'julio','paterno'=>'Guzman','materno'=>'Mendez','email'=>'alv4@gmail.com','telefono'=>'3453232','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170824','nombre'=>'tereza','paterno'=>'Espinoza','materno'=>'alvarez','email'=>'alv5@gmail.com','telefono'=>'252342','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170825','nombre'=>'marcos','paterno'=>'Condori','materno'=>'','email'=>'alv6@gmail.com','telefono'=>'243523','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170826','nombre'=>'selena','paterno'=>'Nina','materno'=>'','email'=>'alv7@gmail.com','telefono'=>'23523','direccion'=>'santa cruz']);
        Estudiante::create(['Nregistro'=>'2170827','nombre'=>'julio','paterno'=>'Cespedes','materno'=>'','email'=>'alv8@gmail.com','telefono'=>'23532','direccion'=>'montero bariio 35ener']);
        Estudiante::create(['Nregistro'=>'2170828','nombre'=>'sandro','paterno'=>'Duarte','materno'=>'','email'=>'alv99@gmail.com','telefono'=>'23523','direccion'=>'santa cruz']);
        
     /*    Estudiante::create(['nombre'=>'alexia','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'raul','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'lucas','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'maria','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'lesly','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'veronica','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'sandra','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'leidy','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'luis','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'carlos','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        */
        /*  
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        Estudiante::create(['nombre'=>'','paterno'=>'','materno'=>'','email'=>'alv@gmail.com','telefono'=>'','direccion'=>'']);
        */ 
    }
}
