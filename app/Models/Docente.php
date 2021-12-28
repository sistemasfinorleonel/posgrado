<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $guarded =['id'];

        public function cursos(){
            return $this->hasMany('App\Models\Curso');
        }

        
        public function estudio_superior(){
            return $this->hasMany('App\Models\EstudioSuperior');
        }

        
        public function exeriencia_laboral(){
            return $this->hasMany('App\Models\ExperienciaLaboral');
        }

        public function grupos(){
            return $this->hasMany('App\Models\Grupo');
        }
    }
