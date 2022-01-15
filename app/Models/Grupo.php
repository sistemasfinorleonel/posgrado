<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function horarios(){

        return $this->belongsToMany('App\Models\Horario');
    }

    public function estudiantes(){
        return $this->belongsToMany('App\Models\Estudiante');
    }
    
    public function programa_modulos(){
        return $this->belongsTo('App\Models\ProgramaModulo');
    }
}
