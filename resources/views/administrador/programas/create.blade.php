<x-app-layout>
    <div class="container py-8 ">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">CREAR NUEVO PROGRAMA</h1>
                <hr class="mt-2 mb-6"> 
                {!! Form::open(['route' =>'administrador.programas.store', 'files'=>true]) !!}
                    @include('administrador.programas.partials.form')
                    <div class="flex justify-end">
                        {!! Form::submit('Crear nuevo programa', ['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script src="{{asset('js/administrador/programas/form.js')}}"></script>
</x-app-layout>