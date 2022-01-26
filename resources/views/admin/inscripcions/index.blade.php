
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="card">
    <div class="card-body"> 
           <div class="card-header">
               <a class ="btn btn-primary"href="{{route('admin.inscripcions.create')}}"> Realizar inscripción</a>            
            </div> 
            <div class="card-body">  
                <table id ="inscripcion"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>#ID</th>
                            <th>#</th>
                            <th>Registro</th>
                            <th>Nombre completo </th>
                            <th>Programa</th>            
                            <th>Tipo de programa</th>                         
                            <th>

                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($listaincripcions as $inscripcion)
                            <tr>
                                
                                <td>{{$inscripcion->inscripcion_id}}</td>
                                <td>{{$inscripcion->estudiante_id}}</td>
                                <td>{{$inscripcion->Nregistro}}</td>
                                <td>{{$inscripcion->nombre_estudiante}} {{$inscripcion->paterno}}</td>
                                <td>{{$inscripcion->nombre_programa}}</td>\
                                <td>{{$inscripcion->nombre_tipo}}</td>
                                <td>
                                    <a href="{{ route('pdfAvance', ['inscripcion'=>$inscripcion->inscripcion_id]) }}" class="btn btn-sm btn-warning">
                                        PDF
                                    </a>
                                </td>
                          
                                                   
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>
@stop