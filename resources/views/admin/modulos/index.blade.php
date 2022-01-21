@extends('adminlte::page')

@section('title', 'PostGrado')

@section('content_header')
    <h1><strong>Modulos</strong></h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">
           <div class="card-header">
               <a class ="btn btn-primary"href="{{route('admin.modulos.create')}}"> Agregar modulos</a>            
            </div> 
            <div class="card-body">  
                <table id ="estudiante"class= "table table-striped" style="width:100%"> 
                    <thead>
                        <tr>
                        
                            <th>Id</th>
                            <th>Nombre</th>            
                            <th>Credito</th>            
                            <th>Horas Academicas</th>            
                            <th>Horas Investigacion</th>             
                         
                            <th>Subprograma</th>            
                            <th ></th>
                            <th ></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($modulos as $modulo)
                            <tr>
                                    <td>{{$modulo->id}}</td>
                                    
                                    <td>{{$modulo->nombre}}</td>
                                    <td>{{$modulo->credito}}</td>
                                    <td>{{$modulo->horasAcademica}}</td>
                                    <td>{{$modulo->horasInvestigacion}}</td>
                                  
                                    <td>{{$modulo->subPrograma}}</td>
                                    
                                    <td>
                                        <a class ="btn btn-primary"href="{{route('admin.modulos.edit',$modulo)}}">Editar</a>
                                    </td>  
                        `
                                    <td >
                                        <form action="{{route('admin.modulos.destroy',$modulo)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger " type="submit">Eliminar</button>
                                        </form>
                                    </td> 
                                                   
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
            

        </div>








@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">   

@endsection

@section('js') 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#estudiante').DataTable(
        {

            responsive:true,
            autoWhidh:false,
        
    
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por paginas",
            "zeroRecords": "nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ registros totales)",
            'search':'buscar:',
            'paginate':{
            'next':'siguiente',
            'previous':'anterior'
        }
        }
            }    );
} );
</script>
    
@endsection
@stop