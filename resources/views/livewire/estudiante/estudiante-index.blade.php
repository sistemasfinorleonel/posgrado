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
        
        @if ($estudiantes->count())
         <div class="card-body">
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th>N°Registro</th>
                         <th>Nombre</th> 
                         <th>Email</th>
                         <th>Telefono</th>
                         <th>Direccion</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($estudiantes as $estudiante)
                         <tr>
                             <td>{{$estudiante->Nregistro}}</td>
                             <td>{{$estudiante->nombre}}  {{$estudiante->paterno}}      {{$estudiante->materno}}</td>
                             <td>{{$estudiante->email}}</td>
                             <td>{{$estudiante->telefono}}</td>
                             <td>{{$estudiante->direccion}}</td>
                             <td> 
                            
                                <button class="btn btn-success btn-sm" wire:click="show_form_update({{$estudiante->id}})">Editar</button>
                             </td>
                         
                         </tr>
                     @endforeach
                 </tbody>
     
             </table>
             </div>
     
             <div class="card-footer">
                 {{$estudiantes->links()}}
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
                Agregar Estudiante
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
            {!! Form::label('Nregistro','N° Registro') !!}
            {!! Form::text('Nregistro',$this->Nregistro , ['class'=>'form-control','wire:model'=>'Nregistro','placeholder'=>'Ingrese su numero de registro']) !!}
            @error('Nregistro')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',$this->nombre, ['class'=>'form-control','wire:model'=>'nombre','placeholder'=>'Ingrese nombre del estudiante']) !!}
        
            @error('nombre')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('paterno','Paterno') !!}
            {!! Form::text('paterno',$this->paterno , ['class'=>'form-control','wire:model'=>'paterno','placeholder'=>'Ingrese apellido paterno']) !!}
        @error('paterno')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="form-group">
            {!! Form::label('materno','Materno') !!}
            {!! Form::text('materno',$this->materno , ['class'=>'form-control','wire:model'=>'materno','placeholder'=>'Ingrese apellido materno']) !!}
        @error('materno')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email',$this->email , ['class'=>'form-control','wire:model'=>'email','placeholder'=>'Ingrese correo electronico del estudiante']) !!}
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
            {!! Form::label('telefono','Telefono') !!}
            {!! Form::number('telefono',$this->telefono , ['class'=>'form-control','wire:model'=>'telefono','placeholder'=>'Ingrese numero de telefono']) !!}
        @error('telefono')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
            {!! Form::label('direccion','Direccion') !!}
            {!! Form::text('direccion',$this->direccion , ['class'=>'form-control','wire:model'=>'direccion','placeholder'=>'Ingrese la direccion del estudiante']) !!}
        @error('direccion')
        <span class="text-danger">{{$message}}</span>
        @enderror
        
       
    </div> 

</div>

@endif
    </div>
