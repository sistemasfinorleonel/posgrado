<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    protected $model=Curso::class;
    public function definition()
    {
        return[
            'nombre'=>$this->faker->name(),
            'institucion'=> $this->faker->name(),
            'año'=> $this->faker->randomElement(['1990','2000']),
            'docente_id'=> Docente::all()->random()->id,

        ];
    }
}
