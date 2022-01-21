@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Añadir Estudiante</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'admin.estudiantes.store']) !!}
         @include('admin.estudiantes.form')
            
           {!! Form::submit('Agregar registro', ['class'=>'btn btn-success'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop