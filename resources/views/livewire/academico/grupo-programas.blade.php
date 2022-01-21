<div>
  <div class="card">
    <div class="card-header">
         <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre ..">
    </div>
    
    @if ($grupos->count())
     <div class="card-body">
         <table class="table table-striped">
             <thead>
                 <tr>
                  <th>ID GRUPO</th>  
                  <th>NOMBRE DEL PROGRAMA</th>
                     <th>NOMBRE DEL DOCENTE</th>
                    
                 </tr>
             </thead>
             <tbody>
                 @foreach ($grupos as $grupo)
                     <tr> 
                       
                      <td>{{$grupo->id}}</td>
                         <td>{{$grupo->nombre_programa}}</td>
                         <td>{{$grupo->nombre_docente}}</td>
                         
                         <td></td>{{--$grupo->programa_modulos->programa_id}}</td>
                         {{-- <td>{{$grupo->dia}}</td>
                         <td>{{$grupo->horaEntrada}}</td>
                         <td>{{$grupo->horaSalida}}</td> --}}
                         <td width="10px">
                             <a class="btn btn-primary" href="{{ route('admin.grupos.edit',$grupo) }}">Editar</a>
                         </td>
                         <td width="10px">
                          
                            <form action="{{route('admin.grupos.destroy',$grupo)}}" method="post">
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
 
       {{--   <div class="card-footer">
             {{$grupos->links()}}
         
            </div> --}}
     
     @else
        <div class="card-body">
                 <strong> No hay  ningun registro</strong>
        </div>
    @endif
    
 </div>
 
</div>
