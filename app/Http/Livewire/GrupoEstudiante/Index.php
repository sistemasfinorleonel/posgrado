<?php

namespace App\Http\Livewire\GrupoEstudiante;

use App\Models\GrupoEstudiante;
use App\Models\GrupoHorario;
use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    public $table = true; 
    protected $paginationTheme="bootstrap";
    use WithPagination;

    public $grupo_estudiante_id;
    public $nota =0;
    public $grupo_id;
    public $estudiante_id;
    public $search;
    public $array_grupo = [];
    public $count=0;

    public $isEdit = false;
    public $new_nota;
    public $new_grupo_id;


    public $programa_id;

    public $data;
    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.grupo-estudiante.index',[
            'grupos_estudiantes' => grupos_estudiantes($search)
        ]);
    }

    public function show_form_add(){
        $this->table = false;
        $this->isEdit = false;
    }

    public function limpiar_page(){
        $this->reset('page');
    }

    public function close_form_add(){
        $this->table = true;
    }

    public function add_array(){
        array_push($this->array_grupo,[
            'nota' => $this->nota,
            'grupo_id' => $this->grupo_id,
        ]);
        $this->count = $this->count + 1;
    }

    public function save_grupo_estudiante(){
        
        for ($i=0; $i < $this->count; $i++) { 
            $grupo_estudiante = new GrupoEstudiante();
            $grupo_estudiante->estudiante_id = $this->estudiante_id;
            $grupo_estudiante->nota = $this->array_grupo[$i]['nota'];
            $grupo_estudiante->grupo_id = $this->array_grupo[$i]['grupo_id'];
            $grupo_estudiante->save();
        }

        $this->array_grupo=[];
        $this->table = true;

    }

    public function show_edit($id){
        $this->table = false;   
        $this->isEdit = true;   

        $this->grupo_estudiante_id = $id;

    }
    
    public function update_grupo_estudiante(){
        $grupo_estudiante = GrupoEstudiante::findOrFail($this->grupo_estudiante_id);
        $grupo_estudiante->nota = $this->new_nota;
        $grupo_estudiante->update();

        $this->new_nota = null;

        $this->table = true;
        $this->isEdit = false;
    }
    

}
