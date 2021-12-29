<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Docente::class;
    public function definition()
    {
        return[
            
        
            'ci'=>$this->faker->name(),
            'nombre'=>$this->faker->name(),
            'paterno'=>$this->faker->name(),
            'materno'=>$this->faker->name(),
            'telefono'=>$this->faker->text(),
            'direccion'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'fecha_nacimiento'=>$this->faker->randomElement(['05/08/2000','15/09/1998','12/02/1995','23/05/1990']),
            'lugar_nacimiento'=>$this->faker->city(),
            
        ];
    }
}
