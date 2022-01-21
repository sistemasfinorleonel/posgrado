<?php

namespace App\Http\Livewire\GrupoHorario;

use App\Models\ProgramaModulo;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $table = true; 
    protected $paginationTheme="bootstrap";
    use WithPagination;

    public $programa_modulo_id;
    public $edicion;
    public $programa_id;
    public $modulo_id;
    public $search;

    public $isEdit = false;

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.grupo-horario.index',[
            'programas_modulos' => grupos_horarios($search)
        ]);
    }

    public function show_form_add(){
        $this->table = false;
        $this->isEdit = false;
    }
    public function close_form_add(){
        $this->table = true;
    }

    public function save_or_update_programa_modulo(){

        if($this->isEdit){
            update_programa_modulo($this->programa_modulo_id,$this->edicion,$this->programa_id,$this->modulo_id);
            $this->close_form_add();
            $this->programa_modulo_id;
        }else{
            save_programa_modulo($this->edicion,$this->programa_id,$this->modulo_id);
            $this->close_form_add();
        }


        $this->reset_programa_modulo();
    }

    public function reset_programa_modulo(){
        $this->edicion = null;
        $this->programa_id = null;
        $this->modulo_id = null;
    }
    public function limpiar_page(){
        $this->reset('page');
    }

    public function delete_programa_modulo($id){
        $programa_modulo = ProgramaModulo::findOrFail($id);
        $programa_modulo->delete();
    }

    public function show_form_update(ProgramaModulo $programa_modulo){
        $this->isEdit = true;
        $this->table = false;

        $this->programa_modulo_id = $programa_modulo->id;
        $this->edicion = $programa_modulo->edicion;
        $this->programa_id = $programa_modulo->programa_id;
        $this->modulo_id = $programa_modulo->modulo_id;
    }
}
