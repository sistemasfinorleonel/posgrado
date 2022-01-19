<?php

namespace App\Http\Livewire;

use App\Models\EstudioSuperior;
use Livewire\Component;
use Livewire\WithPagination;

class AdminEstudiosDocente extends Component
{
    
    use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public function render()
    {   $estudios=EstudioSuperior::where('nombre','LIKE','%'.$this->search.'%')
        //->orWhere('email','LIKE','%'.$this->search.'%')
        ->paginate(8); 
  
        return view('livewire.admin-estudios-docente',compact('estudios'));
    }

    
    public function limpiar_page(){
        $this->reset('page');
    }
}
