@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR</h1>
@stop

@section('content')

<div class="card">
     <div class="card-body">    
        {!! Form::open(['route' => 'admin.docentes.store']) !!}
         @include('admin.docentes.form')
            
           {!! Form::submit('CREAR NUEVO REGISTRO', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    </div>
</div> 
@stop