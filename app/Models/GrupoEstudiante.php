<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoEstudiante extends Model
{
    use HasFactory;
    protected $table = 'programa_modulos';
    protected $primaryKey='id';

    protected $fillable =[
        'nota',
        'grupo_id',
        'estudiante_id',
    ];
    
}
