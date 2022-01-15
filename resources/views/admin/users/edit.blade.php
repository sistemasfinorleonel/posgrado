@extends('adminlte::page')

@section('title', 'PostGrado')

@section('content_header')
    <h1>edit usuario</h1>
@stop

@section('content')
  <div class="card">
        <div class="card-body">
            <h1 class="h5">Nombre</h1>
            <p class="form-control">{{$user->name}}</p>
            <h1 class="h5">lista de roles</h1> 
            {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
            @foreach ($roles as $role)
            <div>
                <label>
                {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!} 
                {{$role->name}}
                </label>
            </div>   
            @endforeach
                {!! Form::submit('Asignar Rol', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
       </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop