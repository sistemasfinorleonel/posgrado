<div>
    <div class="card">
        <div class="card-header">
             <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre ..">
        </div>
        
        @if ($cursos->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>NOMBRE</th>
                         <th>INSTITUCION</th>
                         <th>AÑO</th>
                         <th>NOMBRE COMPLETO DOCENTE</th>
                         <th>CORREO</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($cursos as $curso)
                         <tr> 
                           
                             <td>{{$curso->id}}</td>
                             <td>{{$curso->nombre}}</td>
                             <td>{{$curso->institucion}}</td>
                             <td>{{$curso->anio}}</td>
                             <td>{{$curso->docentes->nombre}}{{$curso->docentes->paterno}}</td>
                             <td>{{$curso->docentes->email}}</td>
                             <td width="10px">
                                 <a class="btn btn-primary" href="{{ route('admin.cursos.edit',$curso) }}">Editar</a>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
     
             </table>
             </div>
     
             <div class="card-footer">
                 {{$cursos->links()}}
             
                </div>
         
         @else
            <div class="card-body">
                     <strong> No hay  ningun registro</strong>
            </div>
        @endif
        
     </div>
     
</div>
