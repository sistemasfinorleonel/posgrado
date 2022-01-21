@extends('adminlte::page')

@section('title', 'PostGrado')

@section('content_header')
    <h1>LISTA DE  ROLES</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success" role="alert">
    <strong>Exito</strong> {{session('info')}}
</div>  
@endif 

<div class="card">
   
    <div class="card-header">
         <a class="btn btn-success" href="{{route('admin.roles.create')}}">Crear</a>
    </div>
     
   
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>

            </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.roles.edit',$role)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>        
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop