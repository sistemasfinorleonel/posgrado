<div class="form-group">
    {!! Form::label('ci','Carnet') !!}
    {!! Form::text('ci',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}

</div>
<div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}

    @error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('paterno','Paterno') !!}
    {!! Form::text('paterno',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('paterno')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('materno','Materno') !!}
    {!! Form::text('materno',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('materno')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('telefono','Telefono') !!}
    {!! Form::number('telefono',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('telefono')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('direccion','Direccion') !!}
    {!! Form::text('direccion',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('direccion')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('email','Email') !!}
    {!! Form::text('email',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('email')
<span class="text-danger">{{$message}}</span>
@enderror
</div>




<div class="form-group">
    {!! Form::label('fecha_nacimiento','Fecha_nacimiento') !!}
   <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{isset($docente->fecha_nacimiento)?$docente->fecha_nacimiento:""}}">
  
@error('fecha_nacimiento')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('lugar_nacimiento','Lugar_nacimiento') !!}
    {!! Form::text('lugar_nacimiento',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('lugar_nacimiento')
<span class="text-danger">{{$message}}</span>
@enderror
</div>


