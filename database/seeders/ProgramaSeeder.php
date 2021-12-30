<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Programa;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $programas= Programa::factory(20)->create();
        foreach ($programas as $programa) {
            Image::factory(1)->create([
                'imageable_id'=>$programa->id,
                'imageable_type'=>'App\Models\Programa'
            ]);
        }    
    
    }
}
