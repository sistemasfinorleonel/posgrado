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
    
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

    public function tipoprograma(){
        return $this->belongsTo('App\Models\TipoPrograma');
          }

          public function scopeTipo($query,$category_id)
          {
              if ($category_id) {
                return $query->where('tipo_id',$category_id);
              }
          }

}
