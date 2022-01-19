<div class="mb-4">
    {!! Form::label('nombre', 'Nombre del programa') !!}
    {!! Form::text('nombre', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="mb-4">
    {!! Form::label('version', 'Version del programa') !!}
    {!! Form::text('version', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="mb-4">
    {!! Form::label('duracionMeses', 'Duracion del programa') !!}
    {!! Form::text('duracionMeses', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="mb-4">
    {!! Form::label('totalModulos', 'Cantidad de modulos del programa') !!}
    {!! Form::text('totalModulos', null, ['class' => 'form-input block w-full mt-1']) !!}
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('tipo_id', 'Tipo de programa') !!}
        {!! Form::select('tipo_id', $tipo, null, ['class' => 'form-input block w-full mt-1']) !!}
    </div>
</div>

<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>
<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($programa)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($programa->image->url)}}" alt="">
            @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/4050325/pexels-photo-4050325.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        @endisset
    </figure>
    <div>
        <p class="mb-2">lorem  ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,</p>
        {!! Form::file('file', ['class'=>'form-input w-full','id'=>'file']) !!}
    </div>
</div>