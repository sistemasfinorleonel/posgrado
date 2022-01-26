<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Inscripcion;
use App\Models\Programa;
use App\Models\TipoPrograma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaincripcions = Estudiante::join('inscripcions', 'estudiantes.id', '=', 'inscripcions.estudiante_id')
            ->join('programas', 'programas.id', '=', 'inscripcions.programa_id')
            ->join('tipo_programas', 'programas.tipo_id', '=', 'tipo_programas.id')
            ->get([
                'inscripcions.id as inscripcion_id',
                'programas.id as programa_id',
                'estudiantes.id as estudiante_id',
                'estudiantes.nombre as nombre_estudiante', 
                'estudiantes.Nregistro', 'estudiantes.paterno', 
                'estudiantes.materno', 'programas.nombre as nombre_programa',
                'tipo_programas.nombre as nombre_tipo'
            ]);

        return view('admin.inscripcions.index', compact('listaincripcions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inscripcions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {/*   {  $request->validate([
        'programaid'=>'required',
        'estudianteid'=>'required',

    ]); */
        $id_programa = $request->programaid;
        $id_estudiante = $request->estudianteid;


        $re = DB::table("inscripcions")
            ->insert([
                'programa_id' => $id_programa,
                'estudiante_id' => $id_estudiante
            ]);
        // return $re;



        return redirect()->route('admin.inscripcions.index')->with('info', 'El  rol se creo  satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
