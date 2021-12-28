<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
  
    public function modulos(){
        return $this->belongsToMany('App\Models\Modulo');
        }


        public function estudiantes(){
            return $this->belongsToMany('App\Models\Estudiante');
            }
    

}
