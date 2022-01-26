<?php

namespace App\Http\Livewire\Grupo;

use App\Models\Grupo;
use App\Models\GrupoHorario;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $table = true; 
    protected $paginationTheme="bootstrap";
    use WithPagination;

    public $grupo_id;
    public $fecha_ini;
    public $fecha_fin;
    public $docente_id;
    public $programa_modulo_id;
    public $search;

    public $isEdit = false;

    public function render()
    {
        $data = Grupo::paginate(10);
        if(!is_null($this->fecha_ini) && !is_null($this->fecha_fin)){
            $data = Grupo::
            where('fecha_ini','>=',$this->fecha_ini)
            ->where('fecha_fin','<=',$this->fecha_fin)
            ->paginate(10);
        }
        $search = '%'.$this->search.'%';
        return view('livewire.grupo.index',[
            'grupos' => $data
        ]);
    }

    public function show_form_add(){
        $this->table = false;
        $this->isEdit = false;
    }
    public function close_form_add(){
        $this->table = true;
    }

    public function save_or_update(){

        if($this->isEdit){
            update_grupo($this->grupo_id,$this->fecha_ini,$this->fecha_fin,$this->docente_id,$this->programa_modulo_id);
        }else{
            save_grupo($this->fecha_ini,$this->fecha_fin,$this->docente_id,$this->programa_modulo_id);
        }
        $this->reset_grupo();
        $this->table=true;
    }

    public function reset_grupo(){
         $this->grupo_id=null;
         $this->fecha_ini=null;
         $this->fecha_fin=null;
         $this->docente_id=null;
         $this->programa_modulo_id=null;
    }
    public function limpiar_page(){
        $this->reset('page');
    }

    public function delete_grupo_horario($id){
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();
    }

    public function show_form_update(Grupo $grupo){
        $this->isEdit = true;
        $this->table = false;

        $this->grupo_id=$grupo->id;

        $this->fecha_ini=$grupo->fecha_ini;
        $this->fecha_fin=$grupo->fecha_fin;
        $this->docente_id=$grupo->docente_id;
        $this->programa_modulo_id=$grupo->programa_modulo_id;

    }
}
