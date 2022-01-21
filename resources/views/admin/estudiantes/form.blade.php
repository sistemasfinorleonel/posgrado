{{-- <div class="form-group">
    {!! Form::label('ci','ci') !!}
    {!! Form::text('ci',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}

</div> --}}
<div class="form-group">
    {!! Form::label('Nregistro','Registro') !!}
    {!! Form::text('Nregistro',null , ['class'=>'form-control','placeholder'=>'Ingrese su numero de registro']) !!}
    @error('Nregistro')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'Ingrese nombre del estudiante']) !!}

    @error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('paterno','Paterno') !!}
    {!! Form::text('paterno',null , ['class'=>'form-control','placeholder'=>'Ingrese apellido paterno']) !!}
@error('paterno')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('materno','Materno') !!}
    {!! Form::text('materno',null , ['class'=>'form-control','placeholder'=>'Ingrese apellido materno']) !!}
@error('materno')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('email','Email') !!}
    {!! Form::text('email',null , ['class'=>'form-control','placeholder'=>'Ingrese correo electronico del estudiante']) !!}
@error('email')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('telefono','Telefono') !!}
    {!! Form::number('telefono',null , ['class'=>'form-control','placeholder'=>'Ingrese numero de telefono']) !!}
@error('telefono')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('direccion','Direccion') !!}
    {!! Form::text('direccion',null , ['class'=>'form-control','placeholder'=>'Ingrese la direccion del estudiante']) !!}
@error('direccion')
<span class="text-danger">{{$message}}</span>
@enderror
</div>




