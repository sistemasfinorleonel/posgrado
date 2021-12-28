<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'tipo'=>$this->faker->randomElement(['MAESTRIA','DIPLOMADO','DOCTORADO','ESPECIALIDAD']),
            'version'=>$this->faker->text(),
            'duracionMeses'=> $this->faker->numerify(),
            'totalModulos'=> $this->faker->numerify(),
         
        ];
    }
}
