<?php

namespace Database\Factories;

use App\Models\Modulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Modulo::class;
    
    public function definition()
    {
        return [  
            'nombre'=>$this->faker->sentence(),
        'credito'=>$this->faker->sentence(),
        'horasAcademica'=> $this->faker->numerify(),
        'horasInvestigacion'=> $this->faker->numerify(),
        
        'subPrograma'=> $this->faker->name(),
        
            
        ];
    }
}
