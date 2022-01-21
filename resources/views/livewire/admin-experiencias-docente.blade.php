<div>
    <div class="card">
        <div class="card-header">
             <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre ..">
        </div>
    
        @if ($experiencias->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr >
                         <th>Id</th>
                         <th>Empresa</th>
                         <th>Cargo</th>
                         <th>Fecha inicio</th>
                         <th>Fecha fín</th>
                         {{-- <th>Nombre completo del docente</th>
                         <th>Email</th> --}}
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($experiencias as $experiencia)
                         <tr> 
                           
                             <td>{{$experiencia->id}}</td>
                             <td>{{$experiencia->empresa}}</td>
                             <td>{{$experiencia->cargo}}</td>
                             <td>{{$experiencia->fechaInicial}}</td>
                             <td>{{$experiencia->fechaFinal}}</td>
                        {{--      <td>{{$experiencia->docentes->nombre}}{{$experiencia->docentes->paterno}}</td>
                             <td>{{$experiencia->docentes->email}}</td>
                            --}}  <td width="10px">
                                 <a class="btn btn-primary" href="{{ route('admin.experiencias.edit',$experiencia) }}">Editar</a>
                             </td>
                             <td width="10px">
                              
                                <form action="{{route('admin.experiencias.destroy',$experiencia)}}" method="post">
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
     
             <div class="card-footer">
                 {{$experiencias->links()}}
             
                </div>
         
         @else
            <div class="card-body">
                     <strong> No hay  ningun registro</strong>
            </div>
        @endif
        
     </div>


</div>
