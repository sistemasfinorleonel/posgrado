<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPrograma extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function programas(){
        return $this->hasMany('App\Models\Programa','tipo_id','id');
    }

}
