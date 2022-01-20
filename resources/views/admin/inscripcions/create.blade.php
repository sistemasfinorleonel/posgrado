@extends('adminlte::page')

@section('title', 'PostGrado')

@section('content_header')
<div class="card-header">
    <strong>INSCRIPCION DE MATERIAS</strong>
</div>
@stop

@section('content')

@livewire('academico.inscripcion.create-inscripcion')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop