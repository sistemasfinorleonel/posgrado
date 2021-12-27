<?php

namespace Database\Seeders;

use App\Models\Docente;
use App\Models\User;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      /*   User::created([

            'name'=>'leonel chana',
            'email'=>'leonel@gmail.com',
            'password'=>bcrypt('12345678'),
        ]); */
        User::factory(10)->create();
        
    }
}
