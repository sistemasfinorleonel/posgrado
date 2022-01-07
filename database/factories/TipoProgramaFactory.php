<?php

namespace Database\Factories;

use App\Models\Programa;
use App\Models\TipoPrograma;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoProgramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=TipoPrograma::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->randomElement(['MAESTRIA','DIPLOMADO','DOCTORADO','ESPECIALIDAD']),
         
        ];
    }
}
