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

        
        public function estudiosuperior(){
            return $this->hasMany('App\Models\Curso');
        }

        
        public function exeriencialaborar(){
            return $this->hasMany('App\Models\Curso');
        }

}
