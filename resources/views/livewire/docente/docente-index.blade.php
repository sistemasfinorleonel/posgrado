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
        
        @if ($docentes->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                        
                        <th>Carnet</th>
                        <th>Nombre completo</th>            
                        <th>Telefono</th>            
                         <th>Email</th>              
                        <th>Fecha de Nacimiento</th>
                        <th>Acción</th>
                        
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($docentes as $docente)
                         <tr>
                            
                                    <td>{{$docente->ci}}</td>
                                    <td>{{$docente->nombre}} {{$docente->paterno}} {{$docente->materno}} </td>
                                    <td>{{$docente->telefono}}</td>
                                    <td>{{$docente->email}}</td>
                                    <td>{{$docente->fecha_nacimiento}}</td>
                                   
                             <td> 
                            
                                 <button class="btn btn-success btn-sm" wire:click="show_form_update({{$docente->id}})">Editar</button>
                              </td>
                         
                         </tr>
                     @endforeach
                 </tbody>
     
             </table>
             </div>
     
              <div class="card-footer">
                 {{$docentes->links()}}
             </div> 
         
         @else
            <div class="card-body">
                     <strong> No hay  ningun registro</strong>
            </div>
        @endif
        
     </div>
     
@else

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 text-left">
            <span>
                Agregar docente
            </span>
            </div>
            <div class="col-md-6 text-right">
                <button wire:click='close_form_add' class="btn btn-primary">Cancelar</button>
                <button class="btn btn-primary" wire:click="save_or_update">Guardar</button>
            </div>
        </div>
    </div>
     <div class="card-body">
       
        <div class="form-group">
            {!! Form::label('ci','Carnet') !!}
            {!! Form::text('ci',$this->ci , ['class'=>'form-control','wire:model'=>'ci','placeholder'=>'ingrese  el tipo de prenda']) !!}
        
        </div>
        <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',$this->nombre , ['class'=>'form-control','wire:model'=>'nombre','placeholder'=>'ingrese  el tipo de prenda']) !!}
        
            @error('nombre')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('paterno','Paterno') !!}
            {!! Form::text('paterno',$this->paterno , ['class'=>'form-control','wire:model'=>'paterno','placeholder'=>'ingrese  el tipo de prenda']) !!}
        @error('paterno')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            {!! Form::label('materno','Materno') !!}
            {!! Form::text('materno',$this->materno , ['class'=>'form-control','wire:model'=>'materno','placeholder'=>'ingrese  el tipo de prenda']) !!}
        @error('materno')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('telefono','Telefono') !!}
            {!! Form::number('telefono',$this->telefono , ['class'=>'form-control','wire:model'=>'telefono','placeholder'=>'ingrese  el tipo de prenda']) !!}
        @error('telefono')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('direccion','Direccion') !!}
            {!! Form::text('direccion',$this->direccion , ['class'=>'form-control','wire:model'=>'direccion','placeholder'=>'ingrese  el tipo de prenda']) !!}
        @error('direccion')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',$this->email , ['class'=>'form-control','wire:model'=>'email','placeholder'=>'ingrese  el tipo de prenda']) !!}
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        
        
        
        <div class="form-group">
            {!! Form::label('fecha_nacimiento','Fecha_nacimiento') !!}
         {!! Form::date('fecha_nacimiento', $this->fecha_nacimiento, ['class'=>'form-control','wire:model'=>'fecha_nacimiento','wire:model'=>'fecha_nacimiento']) !!}
        
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{isset($docente->fecha_nacimiento)?$docente->fecha_nacimiento:""}}">
          
        @error('fecha_nacimiento')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('lugar_nacimiento','Lugar_nacimiento') !!}
            {!! Form::text('lugar_nacimiento',$this->lugar_nacimiento , ['class'=>'form-control','wire:model'=>'lugar_nacimiento','placeholder'=>'ingrese  el tipo de prenda']) !!}
        @error('lugar_nacimiento')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        
        
        
       
    </div> 

</div>

@endif
</div>
