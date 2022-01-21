
@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
    <h1>Datos personales<a class ="btn btn-primary btn-sm"href="{{route('admin.estudiantes.edit',$estudiante)}}">Editar</a>
    </h1>       

@stop


@section('content')

<div class="card">
    <div class="card">
        
        <div class="card-body">
            
         {{--    <div><strong>cedula identidad:</strong>{{$estudiante->ci}}</div>
           --}}  <div><strong>Nombre:</strong><p>{{$estudiante->nombre}}</p></div>
            <div><strong>Apellido Paterno:</strong><p>{{$estudiante->paterno}}</p></div>
            <div><strong>Apellido Materno:</strong><p>{{$estudiante->materno}}</p></div>
            <div><strong>Correo:</strong><p>{{$estudiante->email}}</p></div>
            <div><strong>Telefono:</strong><p>{{$estudiante->telefono}}</p></div>
            <div><strong>Direccion:</strong><p>{{$estudiante->direccion}}</p></div>
         
            
        </div>
    </div>
    
</div>


@stop