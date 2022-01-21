<?php

namespace App\Http\Livewire\GrupoHorario;

use App\Models\GrupoHorario;
use App\Models\ProgramaModulo;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $table = true; 
    protected $paginationTheme="bootstrap";
    use WithPagination;

    public $grupo_horario_id;
    public $aula;
    public $grupo_id;
    public $horario_id;
    public $search;

    public $isEdit = false;

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.grupo-horario.index',[
            'grupos_horarios' => grupos_horarios($search)
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
            update_grupo_horario($this->grupo_horario_id,$this->aula,$this->grupo_id,$this->horario_id);
            $this->close_form_add();
            $this->grupo_horario_id;
        }else{
            save_grupo_horario($this->aula,$this->grupo_id,$this->horario_id);
            $this->close_form_add();
        }


        $this->reset_grupo_horario();
    }

    public function reset_grupo_horario(){
        $this->aula = null;
        $this->grupo_id = null;
        $this->horario_id = null;
    }
    public function limpiar_page(){
        $this->reset('page');
    }

    public function delete_grupo_horario($id){
        $grupo_horario = GrupoHorario::findOrFail($id);
        $grupo_horario->delete();
    }

    public function show_form_update(GrupoHorario $grupo_horario){
        $this->isEdit = true;
        $this->table = false;

        $this->grupo_horario_id = $grupo_horario->id;
        $this->aula = $grupo_horario->aula;
        $this->grupo_id = $grupo_horario->grupo_id;
        $this->horario_id = $grupo_horario->horario_id;
    }
}
