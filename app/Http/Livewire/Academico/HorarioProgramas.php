<?php

namespace App\Http\Livewire\Academico;

use App\Models\Horario;
use Livewire\Component;
use Livewire\WithPagination;

class HorarioProgramas extends Component
{
    
    use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public function render()
    {   $horarios=Horario::where('dia','LIKE','%'.$this->search.'%')
        //->orWhere('email','LIKE','%'.$this->search.'%')
        ->paginate(8); 
  
        return view('livewire.academico.horario-programas',compact('horarios'));
    }

    
    public function limpiar_page(){
        $this->reset('page');
    }
}
