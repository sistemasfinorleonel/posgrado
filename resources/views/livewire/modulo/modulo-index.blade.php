<div>
    @if ($table)
    <div class="card">
        <div class="card-header">
            <div class="row">
               <div class="col-6">
                <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre ..">
            </div> 
            <div class="col text-right">
                <button  wire:click='show_form_add' class="btn btn-primary">Agregar</button></div> 
            </div>
          
        </div>
        
        @if ($modulos->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>Codigo</th>
                         <th>Nombre</th> 
                         <th>Credito</th>
                         <th>Horas Academicas</th>
                         <th>Horas Investigacion</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($modulos as $modulo)
                         <tr>
                             <td >{{$modulo->codigo}}</td>
                             <td>{{$modulo->nombre}}</td>
                             <td width="10px"s>{{$modulo->credito}}</td>
                             <td>{{$modulo->horasAcademica}}</td>
                             <td>{{$modulo->horasInvestigacion}}</td>
                             <td> 
                            
                                <button class="btn btn-success btn-sm" wire:click="show_form_update({{$modulo->id}})">Editar</button>
                             </td>
                         
                         </tr>
                     @endforeach
                 </tbody>
     
             </table>
             </div>
     
             <div class="card-footer">
                 {{$modulos->links()}}
             </div>
         
         @else
            <div class="card-body">
                     <strong> No hay  ningun registro</strong>
            </div>
        @endif
        
     </div>
     
@else
@if ($asignar)
<div class="card">
    <div class="card-header">
        <h1>{{$this->nombre}}</h1>
        {!! Form::label('Busqueda') !!}
        {!! Form::text('busqueda', null, ['class'=>'form-control','placeholder'=>'Escriba nombre Programa','wire:model'=>'search']) !!}
        
        
         {!! Form::select('programa', $this->dogo(),'selecione',['class'=>'form-control','wire:model'=>'programa_id']) !!}
        
    </div>
    <div class="card-body">
      
 <div class="card-body">
    {{$this->modulo_id}}
   <table class="table table-striped">
       <thead>
           <tr>
               <th>Codigo</th>
               <th>Nombre</th> 
               <th>Credito</th>
               <th>Horas Academicas</th>
               <th>Horas Investigacion</th>
           </tr>
       </thead>
       <tbody>
           @foreach ($this->listamodulos() as $modulo)
               <tr>
                   <td >{{$modulo->codigo}}</td>
                   <td>{{$modulo->nombre}}</td>
                   <td width="10px">{{$modulo->credito}}</td>
                   <td>{{$modulo->horasAcademica}}</td>
                   <td>{{$modulo->horasInvestigacion}}</td>
                   <td> 
                  
                      <button class="btn btn-success btn-sm" wire:click="show_form_update({{$modulo->id}})">Editar</button>
                   </td>
               
               </tr>
           @endforeach
       </tbody>

   </table>
</div>
    </div>
</div>

 @else
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 text-left">
            <span>
                Agregar modulo
            </span>
            </div>
            <div class="col-md-6 text-right">
                <button wire:click='close_form_add' class="btn btn-primary">Cancelar</button>
                <button class="btn btn-primary" wire:click="save_or_update">Guardar</button>
                <button class="btn btn-primary" wire:click="asignar"> Guardar y asignar un programa </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'Ingrese su numero de Modulo']) !!}
            @error('nombre')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('credito','credito') !!}
            {!! Form::text('credito',null , ['class'=>'form-control','placeholder'=>'Ingrese credito del estudiante']) !!}
        
            @error('credito')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('horasAcademica','horasAcademica') !!}
            {!! Form::number('horasAcademica',null , ['class'=>'form-control','placeholder'=>'Ingrese  horasAcademica']) !!}
        @error('horasAcademica')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            {!! Form::label('horasInvestigacion','horasInvestigacion') !!}
            {!! Form::number('horasInvestigacion',null , ['class'=>'form-control','placeholder'=>'Ingrese apellido horasInvestigacion']) !!}
        @error('horasInvestigacion')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('subPrograma','subPrograma') !!}
            {!! Form::text('subPrograma',null , ['class'=>'form-control','placeholder'=>'Ingrese correo electronico del estudiante']) !!}
        @error('subPrograma')
        <span class="text-danger">{{$message}}</span>
        @enderror
        

    </div> 

</div>
    
@endif
@endif

</div>
