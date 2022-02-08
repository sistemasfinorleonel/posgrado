<?php

namespace App\Http\Livewire\Prueba;

use Livewire\Component;

class Index extends Component
{ public $fecha,$nombre;
    public function render()
    {
        return view('livewire.prueba.index');
    }
}
