<?php

namespace App\Http\Livewire\Academico;

use App\Models\Docente;
use App\Models\Grupo;
use Livewire\Component;
use Livewire\WithPagination;

class GrupoProgramas extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public function render()
    {   $grupos=Grupo:://join('docentes','id','=','docente_id')->get();
        //orWhere('email','LIKE','%'.$this->search.'%')->
        //->
        paginate(8); 
        //return $grupos;
  
        return view('livewire.academico.grupo-programas',compact('grupos'));
    }

    
    public function limpiar_page(){
        $this->reset('page');
    }
}
