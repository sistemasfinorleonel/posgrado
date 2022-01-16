<x-app-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{Storage::url($programa->image->url)}}" alt="">
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{$programa->title}}</h1>
                <h2 class="text-xl mb-3">{{$programa->version}}</h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Versión del programa: {{$programa->version}}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Cantidad de modulos: {{$programa->totalModulos}}</p>
            </div>

        </div>
    </section>

    <div class="container grid grid-cols-3">
        <div class="col-span-2">
            <section class="card">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2"> Lo que aprenderás</h1>
                    {{-- <ul>
                        @foreach($programa->modulos as $modulo)
                        <li>{{$modulo->pivot->nombre}}</li>
                        @endforeach
                    </ul> --}}

                   


                </div>
            </section>
        </div>

    </div>
</x-app-layout>