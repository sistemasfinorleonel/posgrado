<x-app-layout>
  
    <section class="bg-cover" style="background-image: url({{asset('img/programa/student-g08e3bc478_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Los mejores programas de postgrado dentro de la Universidad Autonoma Gabriel Rene Moreno</h1>
                <p class="text-white text-lg mt-2">Si estas buscando potenciar tus conocimientos, has llegado al lugar adecuado, Encuentra programas de postgrado  que te ayudaran en ese proceso </p>
            
                @livewire('search') 

            </div>
        </div>
    </section>  
    @livewire('programa-index')
</x-app-layout>
