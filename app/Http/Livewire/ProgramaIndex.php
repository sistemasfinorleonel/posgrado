<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Programa;
class ProgramaIndex extends Component
{
    public function render()
    { $programas=Programa::paginate(12);
        return view('livewire.programa-index',compact('programas'));
    }
}
