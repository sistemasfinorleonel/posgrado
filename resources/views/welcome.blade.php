<x-app-layout>
   {{--  PORTADA --}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/people-2557399_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Domina la tecnologia con los diferentes programas de postgrado</h1>
                <p class="text-white text-lg mt-2 mb-4">En la unidad de postgrado encontraras diferentes programas para superarte</p>
            
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="Search">
                                                    
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                                Buscar
                            </button>
                        
                        
                    </div>

            </div>
        </div>
    </section>

    <section class="mt-24">
        
        <h1 class="text-gray-600 text-center text-3xl mb-6"> CONTENIDO</h1>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/hands-820272_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700" >Diplomados</h1>
                </header>
                <p class="text-sm text-gray-500">lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/light-bulb-4514505_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700" >Doctorados</h1>
                </header>
                <p class="text-sm text-gray-500">lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/software-developer-6521720_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700" >Maestrias</h1>
                </header>
                <p class="text-sm text-gray-500">lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/startup-3267505_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700" >Especialidades</h1>
                </header>
                <p class="text-sm text-gray-500">lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,lorem ipsum dolor sit amet,</p>
            </article>
        </div>

    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes que programa llevar?</h1>
        <p class="text-center text-white">Dirigete a nuestro sector de los programas ofertados por la UAGRM</p>

        <div class="flex justify-center mt-4">
            <a href="{{route('programas.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de programas
            </a>
        </div>

    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
        <p class=" text-center text-gray-500 text-sm mb-6">Trabajo duro para ser el mejor de las ramas</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($programa as $programa)
                <article class="bg-white shadow-lg rounded overflow-hidden">
                   <img  class="h-36 w-full object-cover" git src="{{Storage::url($programa->image->url)}}" alt=""> 
                    
                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($programa->nombre,40)}}</h1>
                        {{-- <p class="text-gray-500 text-sm">Prof.: {{$programa_modulos->docentes->nombre}}</p> --}}
                        
                        <div class="flex">

                            <ul class="flex text-sm">
                                <li class="mr-1">
                                    <i class="fas fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                        </div>

                        <a href="{{route('programas.show',$programa)}}" class="block text-center w-full mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Mas informacion
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

</x-app-layout>