<div>
    <div class="card">
        <div class="card-header">
             <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre ..">
        </div>
        
        @if ($horarios->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Día</th>
                         <th>Hora de entrada</th>
                         <th>Hora de salida</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($horarios as $horario)
                         <tr> 
                           
                             <td>{{$horario->id}}</td>
                             <td>{{$horario->dia}}</td>
                             <td>{{$horario->horaEntrada}}</td>
                             <td>{{$horario->horaSalida}}</td>
                             <td width="10px">
                                 <a class="btn btn-primary" href="{{ route('admin.horarios.edit',$horario) }}">Editar</a>
                             </td>
                             <td width="10px">
                              
                                <form action="{{route('admin.horarios.destroy',$horario)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger " type="submit">Eiminar</button>
                                    </form>
                            </td>
                         </tr>
                     @endforeach
                 </tbody>
     
             </table>
             </div>
     
             <div class="card-footer">
                 {{$horarios->links()}}
             
                </div>
         
         @else
            <div class="card-body">
                     <strong> No hay  ningun registro</strong>
            </div>
        @endif
        
     </div>
     

</div>
