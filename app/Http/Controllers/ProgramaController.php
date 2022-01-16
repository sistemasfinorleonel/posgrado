<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;
use App\Models\Programa;
use App\Models\ProgramaModulo;
use Illuminate\Support\Facades\DB;

class ProgramaController extends Controller
{
  public function index()
  {
    return view('programas.index');  
  }

  public function show(Programa $programa){
    //return $category = ProgramaModulo::where('6','programa_id')->get();
    
  //  $varrr =DB::select('select modulo_id from programa_modulos where programa_id = 6');
   $modulos=Modulo::all();
   $modulosprogramas=DB::table('programa_modulos')->select('modulo_id')->where('programa_id','=',$programa->id)->get();
  //return $varrr->get();
  //  return $m=Modulo::where(['modulo_id','=',$var])->get();
  // return $category->programasmodulos();
   //return json_encode($category);
   // return $programa->modulos->id;
   
    //return $programa_modulos=ProgramaModulo::where(6,'programa_id')->get();
   
    return view('programas.show', compact('programa','modulos','modulosprogramas') );
  }

}
