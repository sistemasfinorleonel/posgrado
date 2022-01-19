<?php

namespace App\Http\Livewire;

use App\Models\ExperienciaLaboral;
use Livewire\Component;
use Livewire\WithPagination;

class AdminExperienciasDocente extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public function render()
    {$experiencias=ExperienciaLaboral::where('nombre','LIKE','%'.$this->search.'%')
        //->orWhere('email','LIKE','%'.$this->search.'%')
        ->paginate(8); 
        return view('livewire.admin-experiencias-docente',compact('experiencias'));
    }
    
    
   
    
    public function limpiar_page(){
        $this->reset('page');
    }
}
