<?php

namespace App\Http\Livewire\Academico\Inscripcion;

use App\Models\Estudiante;
use App\Models\Programa;
use App\Models\TipoPrograma;
use Livewire\Component;
use Livewire\WithPagination;

class CreateInscripcion extends Component
{   use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public $searchestudiante;
    public $category_id;
    
    public function render()
    {  
       
        return view('livewire.academico.inscripcion.create-inscripcion');

    }
    public function limpiar_page(){
        $this->reset('page');
    }
    public function getResultsProperty(){
        return Programa::select('tipo_programas.nombre as nombre_tipo','programas.id as id','programas.nombre')->join('tipo_programas','tipo_programas.id','=','programas.tipo_id')->where('programas.nombre', 'LIKE', '%' . $this->search . '%')->take(6)->get();
    }
    public function getResultsestudiantesProperty(){
        return Estudiante::where('Nregistro', 'LIKE', '%' . $this->searchestudiante . '%')->take(6)->get();
    }

}
