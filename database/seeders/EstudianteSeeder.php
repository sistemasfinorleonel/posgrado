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
        Estudiante::create(['Nregistro'=>'2170829','nombre'=>'Leonel','paterno'=>'Chana','materno'=>'Cruz','email'=>'alv@gmail.com','telefono'=>'2432423','direccion'=>'Barrio Monasterio']);
        Estudiante::create(['Nregistro'=>'2170839','nombre'=>'Lurdes','paterno'=>'Contreras','materno'=>'Alvares','email'=>'alv1@gmail.com','telefono'=>'3542354','direccion'=>'Barrio Guadalupe 2']);
        Estudiante::create(['Nregistro'=>'2170821','nombre'=>'Jazmin','paterno'=>'Leon','materno'=>'Castillo','email'=>'alv2@gmail.com','telefono'=>'235243','direccion'=>'Barrio Aleman calle 2']);
        Estudiante::create(['Nregistro'=>'2170822','nombre'=>'Noelia','paterno'=>'Duarte','materno'=>'Castro','email'=>'alv3@gmail.com','telefono'=>'235323','direccion'=>'Barrion Rincon del tigre']);
        Estudiante::create(['Nregistro'=>'2170823','nombre'=>'Julio','paterno'=>'Guzman','materno'=>'Mendez','email'=>'alv4@gmail.com','telefono'=>'3453232','direccion'=>'Zona sur Montero']);
        Estudiante::create(['Nregistro'=>'2170824','nombre'=>'Tereza','paterno'=>'Espinoza','materno'=>'Alvarez','email'=>'alv5@gmail.com','telefono'=>'252342','direccion'=>'Calle ingavi']);
        Estudiante::create(['Nregistro'=>'2170825','nombre'=>'Marcos','paterno'=>'Condori','materno'=>'Andia','email'=>'alv6@gmail.com','telefono'=>'243523','direccion'=>'Zona los Chacos']);
        Estudiante::create(['Nregistro'=>'2170826','nombre'=>'Selena','paterno'=>'Nina','materno'=>'Ribera','email'=>'alv7@gmail.com','telefono'=>'23523','direccion'=>'Santa Cruz, zona Chacos']);
        Estudiante::create(['Nregistro'=>'2170827','nombre'=>'Julio','paterno'=>'Cespedes','materno'=>'Guardia','email'=>'alv8@gmail.com','telefono'=>'23532','direccion'=>'Montero Barrio 25 enero']);
        Estudiante::create(['Nregistro'=>'2170828','nombre'=>'Sandro','paterno'=>'Duarte','materno'=>'Mamani','email'=>'alv99@gmail.com','telefono'=>'23523','direccion'=>'Santa Cruz La Cuchilla']);
        
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
