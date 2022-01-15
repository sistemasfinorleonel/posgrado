@extends('adminlte::page')

@section('title', 'PostGrado')

@section('content_header')
    <h1>lista de usuarios</h1>
@stop

@section('content')

@livewire('admin-users')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop