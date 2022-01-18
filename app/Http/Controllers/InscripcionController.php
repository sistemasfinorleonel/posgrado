<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Inscripcion;
use App\Models\Programa;
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
    {  $listaincripcions=Programa::join('inscripcions','programas.id','=','inscripcions.programa_id')
        ->join('estudiantes','estudiantes.id','=','inscripcions.estudiante_id')
        ->join('tipo_programas','tipo_programas.id','=','programas.id')
        ->get([ 'estudiantes.nombre as nombre_estudiante'
        ,'estudiantes.Nregistro','estudiantes.paterno','estudiantes.materno'
        ,'programas.nombre as nombre_programa',
        'tipo_programas.nombre as nombre_tipo'
        ]);
       // join('programa_modulos','programas.id','=','programa_modulos.programa_id')
        //->where('programa_id','=',$programa->id)->get();
      //  return $listaincripcions;
  // return $listaincripcions;
        return view('admin.inscripcions.lista',compact('listaincripcions'));
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inscripcions.inscripcion');
     }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 

        $request->validate([
            'programaid'=>'required',
            'estudianteid'=>'required',

        ]);
       $programaid=$request->programaid;
        $estudiante=Estudiante::where('id','=',$request->estudianteid)->first()->id;
                foreach($programaid as $index =>$id)
            { $id_ser=$programaid[$index];
           
            
                DB::table("inscripcions")
                ->insert([
                    'programa_id'=>"$id_ser",
                    'estudiante_id'=> "$estudiante"
                ]); 
            }
           
               
        //return redirect()->route('admin.inscripcions.index')->with('info','El  rol se creo  satisfactoriamente');
   
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
