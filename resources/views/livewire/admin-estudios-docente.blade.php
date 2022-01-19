<div>
    
    <div class="card">
        <div class="card-header">
             <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre ..">
        </div>
    
        @if ($estudios->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>NOMBRE</th>
                         <th>TIPO</th>
                         <th>CIUDAD</th>
                         <th>PAIS</th>
                         <th>NOMBRE COMPLETO DOCENTE</th>
                         <th>CORREO</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($estudios as $estudio)
                         <tr> 
                           
                             <td>{{$estudio->id}}</td>
                             <td>{{$estudio->nombre}}</td>
                             <td>{{$estudio->tipo}}</td>
                             <td>{{$estudio->ciudad}}</td>
                             <td>{{$estudio->pais}}</td>
                             <td>{{$estudio->docentes->nombre}}{{$estudio->docentes->paterno}}</td>
                       {{--}}      <td>{{$estudio->docentes->email}}</td>
                       --}}       <td width="10px">
                                 <a class="btn btn-primary" href="{{ route('admin.estudios.edit',$estudio) }}">Editar</a>
                             </td>
                             <td width="10px">
                              
                                <form action="{{route('admin.estudios.destroy',$estudio)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" type="submit">ELIMINAR</button>
                                    </form>
                            </td>
                         </tr>
                     @endforeach
                 </tbody>
     
             </table>
             </div>
     
             <div class="card-footer">
                 {{$estudios->links()}}
             
                </div>
         
         @else
            <div class="card-body">
                     <strong> No hay  ningun registro</strong>
            </div>
        @endif
        
     </div>


</div>
