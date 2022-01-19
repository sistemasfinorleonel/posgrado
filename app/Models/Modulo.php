<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
   // protected $guarded =['id'];
    protected $fillable = [
        'nombre', 'credito',
         'horasAcademica', 'horasInvestigacion', 
         'subPrograma'
    ];
    public function programas(){
    return $this->belongsToMany(Programa::class,'programa_modulos','modulo_id','programa_id');
    }
}
