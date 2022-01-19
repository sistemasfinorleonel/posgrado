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

                  @include('administrador.programas.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Actualizar inforamcion', ['class'=>'btn btn-primary']) !!}
                    </div>
                    
                {!!Form::close()!!}
            </div>

        </div>
    </div>
    <script src="{{asset('js/administrador/programas/form.js')}}"></script>
</x-app-layout>