<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use Livewire\Component;
use App\Models\Programa;
use App\Models\TipoPrograma;
use Livewire\WithPagination; 

class ProgramasIndex extends Component
{   
    use WithPagination;
    public $category_id;
    
    
    
    public function render()
    {       $categorys=TipoPrograma::all();
            $programas=Programa::tipo($this->category_id)->latest('id')->paginate(12);
            return view('livewire.programas-index',compact('programas'),compact('categorys'));
    }
    
    public function resetFiltters()
    {
      return $this->reset(['category_id']);
    }

}
