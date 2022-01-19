<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Edicion del programa</h1>
            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="">Informacion del programa</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Modulos del programa</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Horarios</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Estudiantes</a>
                </li>
            </ul>
        </aside>

        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold">INFORMACION DEL PROGRAMA</h1>
                <hr class="mt-2 mb-6">

                {!!Form::model($programa, ['route' => ['administrador.programas.update', $programa],'method'=>'put', 'files'=>true])!!}

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
                            <img id="picture" class="w-full h-64 bg-cover bg-center" src="{{Storage::url($programa->image->url)}}" alt="">
                        </figure>
                        <div>
                            <p class="mb-2">lorem  ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,</p>
                            {!! Form::file('file', ['class'=>'form-input w-full','id'=>'file']) !!}
                        </div>
                    </div>

                    <div class="flex justify-end">
                        {!! Form::submit('Actualizar inforamcion', ['class'=>'btn btn-primary']) !!}
                    </div>
                    
                {!!Form::close()!!}
            </div>

        </div>
    </div>
    <script>

        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event)=>{
                document.getElementById("picture").setAttribute("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
</x-app-layout>