{{-- <div class="form-group">
    {!! Form::label('ci','ci') !!}
    {!! Form::text('ci',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}

</div> --}}
<div class="form-group">
    {!! Form::label('Nregistro','Nregistro') !!}
    {!! Form::text('Nregistro',null , ['class'=>'form-control','placeholder'=>'INGRESE EL NUMERO  DE REGISTRO']) !!}
    @error('Nregistro')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('nombre','nombre') !!}
    {!! Form::text('nombre',null , ['class'=>'form-control','placeholder'=>'INGRESE EL NOMBRE']) !!}

    @error('nombre')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('paterno','paterno') !!}
    {!! Form::text('paterno',null , ['class'=>'form-control','placeholder'=>'INGRESE EL PATERNO']) !!}
@error('paterno')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="form-group">
    {!! Form::label('materno','materno') !!}
    {!! Form::text('materno',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('materno')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('email','email') !!}
    {!! Form::text('email',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('email')
<span class="text-danger">{{$message}}</span>
@enderror
</div>

<div class="form-group">
    {!! Form::label('telefono','telefono') !!}
    {!! Form::number('telefono',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('telefono')
<span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('direccion','direccion') !!}
    {!! Form::text('direccion',null , ['class'=>'form-control','placeholder'=>'ingrese  el tipo de prenda']) !!}
@error('direccion')
<span class="text-danger">{{$message}}</span>
@enderror
</div>




