<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Inscripcion;
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
        return view('admin.inscripcions.inscripcion');
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { git
     //   return view('admin.inscripcions.inscripcion');
      
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
