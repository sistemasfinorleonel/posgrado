<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use App\Models\Programa;
use App\Models\TipoPrograma;
use Livewire\Component;
use Livewire\WithPagination;

class AdminInscripcions extends Component
{use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public $searchestudiante;
    public $category_id;
    
    public function render()
    {  
        $categorys=TipoPrograma::all();
        $programas=Programa::tipo($this->category_id)
        ->where('nombre','LIKE','%'.$this->search.'%')
        ->latest('id')->paginate(4);
        $estudiantes=Estudiante::where('Nregistro','LIKE','%'.$this->searchestudiante.'%')
        ->latest('id')->paginate(4);
       
        return view('livewire.admin-inscripcions',compact('programas'),compact('categorys','estudiantes'));
/* 
        $users=User::where('name','LIKE','%'.$this->search.'%')
        ->orWhere('email','LIKE','%'.$this->search.'%')
        ->paginate(8); 
        
        return view('livewire.admin-users',compact('users')); */
    }
    public function limpiar_page(){
        $this->reset('page');
    }
    public function getResultsProperty(){
        return Programa::where('nombre', 'LIKE', '%' . $this->search . '%')->take(4)->get();
    }
    public function getResultsestudiantesProperty(){
        return Estudiante::where('Nregistro', 'LIKE', '%' . $this->searchestudiante . '%')->take(1)->get();
    }

}
