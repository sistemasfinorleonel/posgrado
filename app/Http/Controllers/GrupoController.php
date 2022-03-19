<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Grupo;
use App\Models\Programa;
use App\Models\TipoPrograma;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar(){
        return view('admin.grup.index');
    } 
    public function index()
    {
        $grupos=TipoPrograma::join('programas','tipo_programas.id','=','programas.id')
        ->join('programa_modulos','programas.id','=','programa_modulos.programa_id')
        ->join('modulos','modulos.id','=','programa_modulos.modulo_id')
        ->join('grupos','programa_modulos.modulo_id','=','grupos.modulo_id')
        ->join('docentes','docentes.id','=','grupos.docente_id')
        
        // ->join('grupos','programa_modulos.modulo_id','=','grupos.modulo_id')
        //->join('grupos','programa_modulos.programa_id','=','grupos.programa_id')
      //  join('programa_modulos','programa_modulos.modulo_id','=','grupos.modulo_id','AND','programa_modulos.programa_id','=','grupos.programa_id')
      ->get([ 'programas.nombre as nombre_programa'
      ,'modulos.nombre as nombre_modulo',
      'tipo_programas.nombre as nombre_tipo',
      'grupos.id','docentes.nombre as nombre_docente'
      ]);

        //join('programa_modulos','programa_modulos.programa_id','=','grupos.programa_id')
        
       // return $grupos;
        return view('admin.grupos.index',compact('grupos'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
        //
    }
}
