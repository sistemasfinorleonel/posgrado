
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($estudiante,['route' => ['admin.estudiantes.update',$estudiante],'method'=>'put']) !!}
        
        @include('admin.estudiantes.form')
        
            {!! Form::submit('actualizar tipo de estudiantes', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop