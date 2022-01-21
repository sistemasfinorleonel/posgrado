<?php

use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Grupo;
use App\Models\GrupoEstudiante;
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

function grupo($id){
    return Grupo::findOrFail($id);
}

function docente($id){
    return Docente::findOrFail($id);
}
function estudiante($id){
    return Estudiante::findOrFail($id);
}

function programa_modulo($id){
    return ProgramaModulo::findOrFail($id);
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
function estudiantes(){
    return Estudiante::all();
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


















function grupos_horarios($search=''){
    return GrupoHorario::
    select(
        'grupo_horario.id',
        'grupo_horario.aula',
        'grupo_horario.horario_id as horario_id',
        'grupo_horario.grupo_id as grupo_id',
        'horarios.horaEntrada',
        'horarios.horaSalida',
        'horarios.dia',
    )
    ->join('grupos','grupos.id','=','grupo_horario.grupo_id')
    ->join('horarios','horarios.id','=','grupo_horario.horario_id')
    // ->where('horarios.dia','LIKE','%'.$search.'%')
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






















function grupos_estudiantes($search=''){
    return GrupoEstudiante::
    select(
        'grupo_estudiante.id',
        'grupo_estudiante.nota',
        'grupo_estudiante.estudiante_id',
        'estudiantes.nombre',
        'estudiantes.paterno',
        'estudiantes.materno',
        'estudiantes.Nregistro',
        'grupo_estudiante.grupo_id',
        'grupos.docente_id',
        'grupos.programa_modulo_id'
        )
    ->join('grupos','grupos.id','=','grupo_estudiante.grupo_id')
    ->join('estudiantes','estudiantes.id','=','grupo_estudiante.estudiante_id')
    ->where('estudiantes.Nregistro','LIKE','%'.$search.'%')
    ->paginate(10);
}





function grupo_estudiante($id){
    return GrupoEstudiante::findOrFail($id);
}



function get_grupo_estudiante($id){
    return GrupoEstudiante::
    select(
        'grupo_estudiante.id',
        'grupo_estudiante.nota',
        'grupo_estudiante.estudiante_id',
        'estudiantes.nombre',
        'estudiantes.paterno',
        'estudiantes.materno',
        'estudiantes.Nregistro',
        'grupo_estudiante.grupo_id',
        'grupos.docente_id',
        'grupos.programa_modulo_id'
        )
    ->join('grupos','grupos.id','=','grupo_estudiante.grupo_id')
    ->join('estudiantes','estudiantes.id','=','grupo_estudiante.estudiante_id')
    ->where('grupo_estudiante.id','=',$id)->first();
}
