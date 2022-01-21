<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Docente::factory(100)->create();
        Docente::create(['ci'=>'13652966 SCZ','nombre'=>'Abigail','paterno'=>'Duran','materno'=>'Espinosa','telefono'=>'60940016','direccion'=>'Barrio Rincon del tigre','email'=>'abbyjhoa@gmail.com','fecha_nacimiento'=>'1-01-1984','lugar_nacimiento'=>'Montero, Bolivia']);
        Docente::create(['ci'=>'9011375 SCZ','nombre'=>'Ana Maria','paterno'=>'Vasquez','materno'=>'Fernandez','telefono'=>'78570362','direccion'=>'Zona los Chacos','email'=>'fernandez@gmail.com','fecha_nacimiento'=>'5-01-2001','lugar_nacimiento'=>'Santa Cruz Bolivia']);
        Docente::create(['ci'=>'10506112 PTO','nombre'=>'Bat Seba','paterno'=>'Calla','materno'=>'Cuevas','telefono'=>'73130619','direccion'=>'Barrio Fabril','email'=>'0','fecha_nacimiento'=>'8-01-1984','lugar_nacimiento'=>'Cochabamba']);
        Docente::create(['ci'=>'12693223 SCZ','nombre'=>'Brenda Anahi','paterno'=>'Rojas','materno'=>'Gomez','telefono'=>'79046604','direccion'=>'Calle Angostura','email'=>'brendiarg95gmaol.com','fecha_nacimiento'=>'9-01-1984','lugar_nacimiento'=>'La Paz']);
        Docente::create(['ci'=>'6308705 SCZ','nombre'=>'Carmen Rosa','paterno'=>'Salas','materno'=>'Bravo','telefono'=>'60992917','direccion'=>'Zona la cuchilla','email'=>'bravo@gmail.com','fecha_nacimiento'=>'12-01-1984','lugar_nacimiento'=>'Sucre']);
        Docente::create(['ci'=>'4699199 SCZ','nombre'=>'Chanel','paterno'=>'Rivadineira','materno'=>'Cuellar','telefono'=>'70066505','direccion'=>'Barrio Rincon del tigre','email'=>'rivadineirach','fecha_nacimiento'=>'13-01-1984','lugar_nacimiento'=>'Montero, Bolivia']);
        Docente::create(['ci'=>'6354242 SCZ','nombre'=>'Cinthia','paterno'=>'Añez','materno'=>'Salvatierra','telefono'=>'60020151','direccion'=>'Zona los Chacos','email'=>'jcinthia2012@gmail.com','fecha_nacimiento'=>'14-01-1984','lugar_nacimiento'=>'Santa Cruz Bolivia']);
        Docente::create(['ci'=>'8071990 SCZ','nombre'=>'Claudia Patricia','paterno'=>'Cortez','materno'=>'Valda','telefono'=>'77391928','direccion'=>'Barrio Fabril','email'=>'patriciacv10495@gmail.com','fecha_nacimiento'=>'16-01-1984','lugar_nacimiento'=>'Cochabamba']);
        Docente::create(['ci'=>'8225673 SCZ','nombre'=>'Coral','paterno'=>'Vargas','materno'=>'Chavez','telefono'=>'60983646','direccion'=>'Calle Angostura','email'=>'coralvch92gmail.com','fecha_nacimiento'=>'17-01-1984','lugar_nacimiento'=>'La Paz']);
        Docente::create(['ci'=>'6354252 SCZ','nombre'=>'Dora','paterno'=>'Ureña','materno'=>'Jaldin','telefono'=>'67526068','direccion'=>'Zona la cuchilla','email'=>'flor_naciente_20@hotmail.com','fecha_nacimiento'=>'20-01-1984','lugar_nacimiento'=>'Sucre']);
        Docente::create(['ci'=>'0 SCZ','nombre'=>'Edwin Wady','paterno'=>'Zurita','materno'=>'Delgadillo','telefono'=>'76622271','direccion'=>'Barrio Rincon del tigre','email'=>'@hotmail.com','fecha_nacimiento'=>'21-01-1984','lugar_nacimiento'=>'Montero, Bolivia']);
        Docente::create(['ci'=>'5870539 SCZ','nombre'=>'Elfi','paterno'=>'Ramires','materno'=>'Balderrama','telefono'=>'73643218','direccion'=>'Zona los Chacos','email'=>'elfi_01@gmail','fecha_nacimiento'=>'22-01-1984','lugar_nacimiento'=>'Santa Cruz Bolivia']);
        Docente::create(['ci'=>'8107931 SCZ','nombre'=>'Elvi Katerine','paterno'=>'Cespedes','materno'=>'Sarabia','telefono'=>'65881234','direccion'=>'Barrio Fabril','email'=>'elvicitakt@gmail.com','fecha_nacimiento'=>'25-01-1984','lugar_nacimiento'=>'Cochabamba']);
        Docente::create(['ci'=>'4080327 SCZ','nombre'=>'Elvia Rosaura','paterno'=>'Flores','materno'=>'Sardinas','telefono'=>'71092322','direccion'=>'Calle Angostura','email'=>'elviarosaurafloressardinasgmail.com','fecha_nacimiento'=>'26-01-1984','lugar_nacimiento'=>'La Paz']);
        Docente::create(['ci'=>'7716857 SCZ','nombre'=>'Emilze Gabriela','paterno'=>'Chacon','materno'=>'Muruchi','telefono'=>'76690413','direccion'=>'Zona la cuchilla','email'=>'emilze12@gmail.com','fecha_nacimiento'=>'28-01-1984','lugar_nacimiento'=>'Sucre']);
        Docente::create(['ci'=>'6289725 SCZ','nombre'=>'Ericka Gabriela','paterno'=>'Caro','materno'=>'Llanos','telefono'=>'75300582','direccion'=>'Barrio Rincon del tigre','email'=>'muruchi@gmail.com','fecha_nacimiento'=>'29-01-1984','lugar_nacimiento'=>'Montero, Bolivia']);
        Docente::create(['ci'=>'7800247 SCZ','nombre'=>'Ervin','paterno'=>'Peñaloza','materno'=>'Quispe','telefono'=>'68764923','direccion'=>'Zona los Chacos','email'=>'ervinpenaloza229gmail.com','fecha_nacimiento'=>'30-01-1984','lugar_nacimiento'=>'Santa Cruz Bolivia']);
        Docente::create(['ci'=>'9628488 SCZ','nombre'=>'Estefania','paterno'=>'Leigue','materno'=>'Ayala','telefono'=>'73125375','direccion'=>'Barrio Fabril','email'=>'estefanialeigue30gmail.com','fecha_nacimiento'=>'31-01-1984','lugar_nacimiento'=>'Cochabamba']);
        Docente::create(['ci'=>'4067445 ORU','nombre'=>'Fanny Aide','paterno'=>'Mamani','materno'=>'Choqueticlla','telefono'=>'74774848','direccion'=>'Calle Angostura','email'=>'fanicita13@hotmail.com','fecha_nacimiento'=>'2-02-1984','lugar_nacimiento'=>'La Paz']);
        Docente::create(['ci'=>'9027818 SCZ','nombre'=>'Francisca','paterno'=>'Paco','materno'=>'Choque','telefono'=>'9027818','direccion'=>'Zona la cuchilla','email'=>'francypacochoquegmail.com','fecha_nacimiento'=>'3-02-1984','lugar_nacimiento'=>'Sucre']);
        Docente::create(['ci'=>'14104010 CHQ','nombre'=>'Frank Jesus','paterno'=>'Chavez','materno'=>'Collantes','telefono'=>'79313988','direccion'=>'Barrio Rincon del tigre','email'=>'angelitooo@gmail.com','fecha_nacimiento'=>'4-02-1984','lugar_nacimiento'=>'Montero, Bolivia']);
        Docente::create(['ci'=>'8225400 SCZ','nombre'=>'Gabriela','paterno'=>'Mendez','materno'=>'Suarez','telefono'=>'70404699','direccion'=>'Zona los Chacos','email'=>'suarez@gmail.com','fecha_nacimiento'=>'5-02-1984','lugar_nacimiento'=>'Santa Cruz Bolivia']);
        Docente::create(['ci'=>'6368727 SCZ','nombre'=>'Gabriela','paterno'=>'Victoria','materno'=>'Zuna','telefono'=>'75533074','direccion'=>'Barrio Fabril','email'=>'gabrielavictoria@gmail.com','fecha_nacimiento'=>'7-02-1984','lugar_nacimiento'=>'Cochabamba']);
        Docente::create(['ci'=>'1101408 CHQ','nombre'=>'Irma','paterno'=>'Galvan','materno'=>'Gamon','telefono'=>'71687626','direccion'=>'Calle Angostura','email'=>'irmagalvang@hotmail.com','fecha_nacimiento'=>'10-02-1984','lugar_nacimiento'=>'La Paz']);
        Docente::create(['ci'=>'5599943 SCZ','nombre'=>'Jeny','paterno'=>'Quiroga','materno'=>'Brum','telefono'=>'78103408','direccion'=>'Zona la cuchilla','email'=>'jenny2784_@outiook.com','fecha_nacimiento'=>'12-02-1984','lugar_nacimiento'=>'Sucre']);
        Docente::create(['ci'=>'0 SCZ','nombre'=>'Jonathan','paterno'=>'Rosas','materno'=>'Gabriel','telefono'=>'79868476','direccion'=>'Barrio Rincon del tigre','email'=>'jonshothotmail.com','fecha_nacimiento'=>'14-02-1984','lugar_nacimiento'=>'Montero, Bolivia']);
        Docente::create(['ci'=>'9845918 SCZ','nombre'=>'Jose Antonio','paterno'=>'Gareca','materno'=>'Ortiz','telefono'=>'70014930','direccion'=>'Zona los Chacos','email'=>'jose.gareca@hotmail.com','fecha_nacimiento'=>'15-02-1984','lugar_nacimiento'=>'Santa Cruz Bolivia']);
        Docente::create(['ci'=>'6090187 LPZ','nombre'=>'Juvenal','paterno'=>'Villca','materno'=>'Vadillo','telefono'=>'73039004','direccion'=>'Barrio Fabril','email'=>'cisaviay@gmail.com','fecha_nacimiento'=>'17-02-1984','lugar_nacimiento'=>'Cochabamba']);
        Docente::create(['ci'=>'7732288 SCZ','nombre'=>'Katya','paterno'=>'Inturias','materno'=>'Rodriguez','telefono'=>'68811635','direccion'=>'Calle Angostura','email'=>'inturiaskatiagmail.com','fecha_nacimiento'=>'19-02-1984','lugar_nacimiento'=>'La Paz']);

    }
}
