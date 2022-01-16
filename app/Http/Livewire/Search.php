<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Programa;

class Search extends Component
{
    public $search;
    public function render()
    {   
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Programa::where('nombre', 'LIKE', '%' . $this->search . '%')->take(8)->get();
    }
}
