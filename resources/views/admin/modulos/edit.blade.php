
@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
@stop
@section('content')

<div class="card">
    <div class="card-body">
      
        {!! Form::model($modulo,['route' => ['admin.modulos.update',$modulo],'method'=>'put']) !!}
        
        @include('admin.modulos.form')
        
            {!! Form::submit('actualizar tipo de modulos', ['class'=>'btn btn-primary'])  !!}
        {!! Form::close() !!}
    
        
      
    </div>
</div> 
@stop