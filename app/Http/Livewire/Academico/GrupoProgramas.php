<?php

namespace App\Http\Livewire\Academico;

use App\Models\Docente;
use App\Models\Grupo;
use App\Models\TipoPrograma;
use Livewire\Component;
use Livewire\WithPagination;

class GrupoProgramas extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";
    public $search;
    public function render()
    {   $grupos=TipoPrograma::join('programas','tipo_programas.id','=','programas.id')
        ->join('programa_modulos','programas.id','=','programa_modulos.programa_id')
        ->join('modulos','modulos.id','=','programa_modulos.modulo_id')
        ->join('grupos','programa_modulos.modulo_id','=','grupos.modulo_id')
        ->join('docentes','docentes.id','=','grupos.docente_id')
        
        // ->join('grupos','programa_modulos.modulo_id','=','grupos.modulo_id')
        //->join('grupos','programa_modulos.programa_id','=','grupos.programa_id')
      //  join('programa_modulos','programa_modulos.modulo_id','=','grupos.modulo_id','AND','programa_modulos.programa_id','=','grupos.programa_id')
      ->get([ 'programas.nombre as nombre_programa'
      ,'modulos.nombre as nombre_modulo',
      'tipo_programas.nombre as nombre_tipo',
      'grupos.id','docentes.nombre as nombre_docente'
      ]);
  
        return view('livewire.academico.grupo-programas',compact('grupos'));
    }

    
    public function limpiar_page(){
        $this->reset('page');
    }
}
