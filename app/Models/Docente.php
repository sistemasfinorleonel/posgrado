<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $guarded =['id'];

        public function cursos(){
            return $this->hasMany('App\Models\Curso','docente_id','id');
        }

        
        public function estudio_superior(){
            return $this->hasMany('App\Models\EstudioSuperior','docente_id','id');
        }

        
        public function exeriencia_laboral(){
            return $this->hasMany('App\Models\ExperienciaLaboral','docente_id','id');
        }

        public function grupos(){
            return $this->hasMany('App\Models\Grupo');
        }
    }
