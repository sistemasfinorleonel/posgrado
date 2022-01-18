
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Postgrado</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
           <div class="card-header">
               <a class ="btn btn-primary"href="{{route('admin.inscripcions.inscripcion')}}"> agregar inscripcion</a>            
            </div> 
            <div class="card-body">  
                <table id ="inscripcion"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>id</th>
                            <th>ci</th>
                            <th>nombre completo</th>            
                            <th>telefono</th>            
                             <th>email</th>              
                            <th>Fecha de Nacimiento</th>     
                            
                             
                     
                            <th ></th>
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($inscripcions as $inscripcion)
                            <tr>
                                    <td>{{$inscripcion->id}}</td>
                                    <td>{{$inscripcion->ci}}</td>
                                    <td>{{$inscripcion->nombre}} {{$inscripcion->paterno}} {{$inscripcion->materno}} </td>
                                    <td>{{$inscripcion->telefono}}</td>
                                 
                                    <td>{{$inscripcion->email}}</td>
                                    <td>{{$inscripcion->fecha_nacimiento}}</td>
                          
                                                   
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
@stop