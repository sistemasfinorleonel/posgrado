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
