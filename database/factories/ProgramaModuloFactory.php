<?php

namespace Database\Factories;

use App\Models\Modulo;
use App\Models\Programa;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramaModuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'programa_id'=>Programa::all()->random()->id,
            'modulo_id'=>Modulo::all()->random()->id,
        ];
    }
}
