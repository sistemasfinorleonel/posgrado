@extends('adminlte::page')

@section('title', 'PostGrado')

@section('content_header')
    <h1>Postgrado</h1>
@stop

@section('content')

@livewire('grupo-estudiante.index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop