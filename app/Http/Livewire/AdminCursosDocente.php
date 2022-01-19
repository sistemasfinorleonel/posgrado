<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\Docente;
use Livewire\Component;
use Livewire\WithPagination;
class AdminCursosDocente extends Component
{   use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public function render()
    {   $cursos=Curso::where('nombre','LIKE','%'.$this->search.'%')
        //->orWhere('email','LIKE','%'.$this->search.'%')
        ->paginate(8); 
  
        return view('livewire.admin-cursos-docente',compact('cursos'));
    }

    
    public function limpiar_page(){
        $this->reset('page');
    }
}
