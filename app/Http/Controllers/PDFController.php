<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Grupo;
use App\Models\Inscripcion;
use App\Models\Modulo;
use App\Models\Programa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
    public function mostrar($inscripcion_id){
        $inscripcion = Inscripcion::findOrFail($inscripcion_id);
        $estudiante = estudiante($inscripcion->estudiante_id);
        
            $collecion =  Programa::
            select('grupos.id as grupo_id','modulos.nombre','grupo_estudiante.nota')->
            join('programa_modulos','programa_modulos.programa_id','=','programas.id')->
            join('modulos','programa_modulos.modulo_id','=','modulos.id')->
            join('grupos','grupos.programa_modulo_id','=','programa_modulos.id')->
            join('grupo_estudiante','grupo_estudiante.grupo_id','=','grupos.id')->
            join('estudiantes','estudiantes.id','=','grupo_estudiante.estudiante_id')->
            where('estudiantes.id','=',$estudiante->id)->
            where('programas.id','=',$inscripcion->programa_id)->get();

        $data = [
            'collecion' => $collecion,
            'estudiante' => $estudiante,
            'programa_id'=> $inscripcion->programa_id
        ];

        $pdf = PDF::loadView('pdf.avanceAcademico',$data);
        return $pdf->download('avance_academico.pdf');
    }  
}
