<?php

namespace App\Http\Livewire\Docente;

use App\Models\Docente;
use Livewire\Component;
use Livewire\WithPagination;
class DocenteIndex extends Component
{   use WithPagination;
 
    protected $paginationTheme="bootstrap";
    public $search,$table=true;
    public $isEdit = false;
    public $docente_id,$ci,$nombre,$paterno,$materno,$telefono;
    public $direccion,$email,$fecha_nacimiento,$lugar_nacimiento;
    public function render()
    { $docentes=Docente::where('ci','LIKE', '%'.$this->search.'%')
        ->orWhere('nombre','LIKE', '%'.$this->search.'%')
        ->orWhere('paterno','LIKE', '%'.$this->search.'%')
        ->orWhere('materno','LIKE', '%'.$this->search.'%')
        ->paginate(8);
        return view('livewire.docente.docente-index',compact('docentes'));
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
    public function show_form_update(Docente $docente ){
        $this->isEdit = true;
        $this->table = false;
     $this->docente_id=$docente->id;   
     $this->ci=$docente->ci;
     $this->nombre=$docente->nombre;
     $this->paterno=$docente->paterno;
     $this->materno=$docente->materno;
     $this->telefono=$docente->telefono;
     $this->direccion=$docente->direccion;
     $this->email=$docente->email;
     $this->fecha_nacimiento=$docente->fecha_nacimiento;
     $this->lugar_nacimiento=$docente->lugar_nacimiento;
    }

    public function save_or_update()
    { if($this->isEdit){
      
        update_docente($this->docente_id
        ,$this->ci,$this->nombre,
        $this->paterno,$this->materno,$this->telefono,$this->direccion,$this->email,
        $this->fecha_nacimiento,$this->lugar_nacimiento);
    }else{
        
        save_docente($this->ci,$this->nombre,
        $this->paterno,$this->materno,$this->telefono,$this->direccion,$this->email,
        $this->fecha_nacimiento,$this->lugar_nacimiento);
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
