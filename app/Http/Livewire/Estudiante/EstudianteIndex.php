<?php

namespace App\Http\Livewire\Estudiante;

use App\Models\Estudiante;
use Livewire\Component;
use Livewire\WithPagination;

class EstudianteIndex extends Component
{
    use WithPagination;
    public $search,$table= true;
    public $estudiante_id,$Nregistro,$nombre,$paterno,$materno,$telefono,$direccion,$email;
    public $isEdit = false;
    
    protected $paginationTheme="bootstrap";
    public function render()
    { $estudiantes=Estudiante::where('Nregistro','LIKE', '%'.$this->search.'%')
        ->orWhere('nombre','LIKE', '%'.$this->search.'%')
        ->orWhere('paterno','LIKE', '%'.$this->search.'%')
        ->orWhere('materno','LIKE', '%'.$this->search.'%')
        ->paginate(8);
        return view('livewire.estudiante.estudiante-index',compact('estudiantes'));
    }
    public function limpiar_page()
    {
        $this->reset('page');
    }
    public function show_form_add(){
        $this->table = false;
        $this->isEdit = false;
    }
    public function close_form_add(){
        $this->table = true;
        $this->reset_estudiante();
    }
    public function show_form_update(Estudiante $estudiante ){
        $this->isEdit = true;
        $this->table = false;
     $this->estudiante_id=$estudiante->id;   
     $this->Nregistro=$estudiante->Nregistro;
     $this->nombre=$estudiante->nombre;
     $this->paterno=$estudiante->paterno;
     $this->materno=$estudiante->materno;
     $this->email=$estudiante->email;
     $this->telefono=$estudiante->telefono;
     $this->direccion=$estudiante->direccion;
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
}
