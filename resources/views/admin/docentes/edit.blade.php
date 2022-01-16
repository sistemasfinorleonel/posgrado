
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($docente,['route' => ['admin.docentes.update',$docente],'method'=>'put']) !!}
        
        @include('admin.docentes.form')
        
            {!! Form::submit('actualizar tipo de docentes', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop