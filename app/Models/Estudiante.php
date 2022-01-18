<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function grupos(){
        return $this->belongsToMany('App\Models\Grupo');
    }
    public function programas(){
        return $this->belongsToMany(Programa::class,'inscripcions','estudiante_id','programa_id');
    }
    
}
