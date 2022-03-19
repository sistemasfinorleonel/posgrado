<?php

namespace App\Http\Livewire\Modulo;

use App\Models\Modulo;
use App\Models\Programa;
use Livewire\Component;
use Livewire\WithPagination;

class ModuloIndex extends Component
{   use WithPagination;
    protected $paginationTheme="bootstrap";
   
    public $search,$table= true,$asignar=false;
    public $modulo_id,$nombre,$credito,$horasAcademica,$horasInvestigacion,$subPrograma;
    public $isEdit = false;
    public function render()
    {$modulos=Modulo::where('nombre','LIKE', '%'.$this->search.'%')
        ->paginate(8);
        return view('livewire.modulo.modulo-index',compact('modulos'));
    }
 

    public function limpiar_page()
    {
        $this->reset('page');
    }
    public function show_form_add(){
        $this->table = false;
        $this->isEdit = false;
    }
    public function asignar(){
$this->asignar=true;
    }
    public function close_form_add(){
        $this->table = true;
        $this->reset_estudiante();
    }
    public function show_form_update(Modulo $modulo ){
        $this->isEdit = true;
        $this->table = false;
     $this->modulo_id=$modulo->id;   
     $this->nombre=$modulo->nombre;
     $this->credito=$modulo->credito;
     $this->horasAcademica=$modulo->horasAcademica;
     $this->horasInvestigacion=$modulo->horasInvestigacion;
     $this->subPrograma=$modulo->subPrograma;
    }

    public function save_or_update()
    { if($this->isEdit){
      
        update_estudiante($this->estudiante_id,$this->Nregistro,$this->nombre,$this->paterno,$this->materno,$this->email,$this->telefono,$this->direccion);
    }else{
        
        save_estudiante($this->Nregistro,$this->nombre,$this->paterno,$this->materno,$this->email,$this->telefono,$this->direccion);
    }
    $this->reset_estudiante();
    $this->table=true;

    }

    public function reset_estudiante()
    {  $this->Nregistro=null;
        $this->nombre=null;
        $this->paterno=null;
        $this->materno=null;
        $this->email=null;
        $this->telefono=null;
        $this->direccion=null;
    }
    public function dogo()
    { return Programa::where('nombre','LIKE', '%'.$this->search.'%')->get();

    }

    public function listamodulos(){
    return Modulo::join('programa_modulos','modulos.id','=','programa_modulos.modulo_id')
    ->join('programas','programas.id','=','programa_modulos.programa_id')
    ->where('programa_modulos.modulo_id','=',$this->modulo_id)
        ->get();
       
    }

}
