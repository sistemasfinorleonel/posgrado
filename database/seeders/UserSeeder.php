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
        $user = User::create([

            'name'=>'leonel ',
            'email'=>'leonel@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);

        $user->assignRole('admin');


        User::factory(10)->create();
        
    }
}
