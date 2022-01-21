@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><strong> REGISTRAR MODULOS</strong></h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'admin.modulos.store']) !!}
         @include('admin.modulos.form')
            
           {!! Form::submit('Agregar registro', ['class'=>'btn btn-success'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop