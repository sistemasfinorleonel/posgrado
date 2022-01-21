<?php

use App\Models\Grupo;
use App\Models\GrupoHorario;
use App\Models\Horario;
use App\Models\Modulo;
use App\Models\Programa;
use App\Models\ProgramaModulo;
use App\Models\TipoPrograma;

function programas_modulos($search){
    return ProgramaModulo::
    join('programas','programas.id','=','programa_modulos.programa_id')
    ->join('modulos','modulos.id','=','programa_modulos.modulo_id')
    ->where('programas.nombre','LIKE','%'.$search.'%')
    ->orWhere('modulos.nombre','LIKE','%'.$search.'%')
    ->paginate(10);
}
function programa($id){
    return Programa::findOrFail($id);
}
function tipo_programa($id){
    return TipoPrograma::findOrFail($id);
}
function modulo($id){
    return Modulo::findOrFail($id);
}


function programas(){
    return Programa::all();
}

function modulos(){
    return Modulo::all();
}

function grupos(){
    return Grupo::all();
}
function horarios(){
    return Horario::all();
}

function save_programa_modulo($edicion,$programa_id,$modulo_id){
    $programa_modulo =  new ProgramaModulo();
    $programa_modulo->edicion = $edicion;
    $programa_modulo->programa_id = $programa_id;
    $programa_modulo->modulo_id = $modulo_id;
    $programa_modulo->save();
}

function update_programa_modulo($id,$edicion,$programa_id,$modulo_id){
    $programa_modulo =   ProgramaModulo::findOrFail($id);
    $programa_modulo->edicion = $edicion;
    $programa_modulo->programa_id = $programa_id;
    $programa_modulo->modulo_id = $modulo_id;
    $programa_modulo->update();
}


















function grupos_horarios($search){
    return GrupoHorario::join('grupos','grupos.id','=','grupo_horario.grupo_id')
    ->join('horarios','horarios.id','=','grupo_horario.horario_id')
    ->where('horarios.dia','LIKE','%'.$search.'%')
    ->paginate(10);
}


function save_grupo_horario($aula,$grupo_id,$horario_id){
    $grupo_horario =  new GrupoHorario();
    $grupo_horario->aula = $aula;
    $grupo_horario->grupo_id = $grupo_id;
    $grupo_horario->horario_id = $horario_id;
    $grupo_horario->save();
}

function update_grupo_horario($id,$aula,$grupo_id,$horario_id){
    $grupo_horario = GrupoHorario::findOrFail($id);
    $grupo_horario->aula = $aula;
    $grupo_horario->grupo_id = $grupo_id;
    $grupo_horario->horario_id = $horario_id;
    $grupo_horario->update();
}