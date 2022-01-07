<?php

namespace Database\Factories;

use App\Models\Programa;
use App\Models\TipoPrograma;
use Illuminate\Database\Eloquent\Factories\Factory;
use JeroenNoten\LaravelAdminLte\Components\Widget\Progress;

class ProgramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Programa::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'version'=>$this->faker->text(),
            'duracionMeses'=> $this->faker->numerify(),
            'totalModulos'=> $this->faker->numerify(),
            'tipo_id'=> TipoPrograma::all()->random()->id,
            
        ];
    }
}
