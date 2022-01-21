
@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
    <h1>Datos personales<a class ="btn btn-primary float-right"href="{{route('admin.docentes.edit',$docente)}}">Editar</a>
    </h1>       

@stop


@section('content')

<div class="card">
    <div class="card">
        
        <div class="card-body">
            
            <div class="mr-4"><strong>cedula identidad:</strong>{{$docente->ci}}</div>
            <div><strong>Nombre:</strong><p>{{$docente->nombre}}</p></div>
            <div><strong>Apellido Paterno:</strong><p>{{$docente->paterno}}</p></div>
            <div><strong>Apellido Materno:</strong><p>{{$docente->materno}}</p></div>
            <div><strong>Telefono:</strong><p>{{$docente->telefono}}</p></div>
            <div><strong>Direccion:</strong><p>{{$docente->direccion}}</p></div>
            <div><strong>Correo:</strong><p>{{$docente->email}}</p></div>
            <div><strong>Fecha de Nacimiento:</strong><p>{{$docente->fecha_nacimiento}}</p></div>
            <div><strong>Lugar de Nacimiento:</strong><p>{{$docente->lugar_nacimiento}}</p></div>
           
            
        </div>
    </div>
    
</div>


@stop