
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Postgrado</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body"> 
           <div class="card-header">
               <a class ="btn btn-primary"href="{{route('admin.inscripcions.create')}}"> agregar inscripcion</a>            
            </div> 
            <div class="card-body">  
                <table id ="inscripcion"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>N Registro</th>
                            <th>Nombre completo </th>
                            <th>Programa</th>            
                            <th>tipo de programa</th>                         
                            <th ></th>
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($listaincripcions as $inscripcion)
                            <tr>
                                <td> {{$inscripcion->Nregistro}}</td>
                                <td> {{$inscripcion->nombre_estudiante}} {{$inscripcion->paterno}}</td>
                                <td>{{$inscripcion->nombre_programa}}</td>
                                <td>{{$inscripcion->nombre_tipo}}</td>
                                <td>
                                    
                                </td>
                          
                                                   
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
@stop