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
                    <h1 class="font-fold text-3xl mb-2"> LOS MODULOS A CURSAR</h1>
                  
                     <ul>
                        {{-- 
                        @foreach ($programa->modulos as $modulo)

                        $modulo->nombre    
                        @endforeach                        
                        --}}
                         @foreach($modulosprogramas as $modulosprograma)
                        @php
                        $ind=$modulosprograma->modulo_id;
                        @endphp
                           
                        @foreach ($modulos as $modulo)
                        @if ($ind==$modulo->id)
                        <article class="mb-4 shadow">
                            <header class="border border-gray-200 px-4 py-2">
                                <h1 class="font-bold text-lg text-gray-600">
    
                                    {{$modulo->nombre}}  
                                </h1>
                            </header>

                        </article>
                    
                        @endif    
                        
                        @endforeach
                        @endforeach
                    </ul> 

                   


                </div>
            </section>
        </div>

    </div>
</x-app-layout>