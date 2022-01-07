<div>
    <div class="bg-gray-200 py-4 mb-24 "> 
           <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex" >
             {{--   no me reconoce  el margen del boton mr-4 --}}
                <button class="focus:outline-none bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4" wire:click="resetFiltters">
                    <i class="fas fa-chalkboard-teacher text-xs mr-2"></i>
                    Todos los Programas
                </button>
                <div class="relative" x-data="{open: false}">
                    <button class=" px-4 text-gray-700 block h-12  rounded-lg overflow-hidden focus:outline-none bg-white shadow " x-on:click="open = true">
                        <i class="fas fa-tags text-sm mr-2"></i>
                        Tipos de Programas
                        <i class="fas fa-angle-down text-sm ml-2"></i>
                    </button>
                    <!-- Dropdown Body -->
                    <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl " x-show="open" x-on:click.away="open = false">   
                        @foreach ($categorys as $category)
                        {{-- <a  class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-600 hover:text-white" wire:click="$set('category_id',{{$curso->id}})" x-on:click="open=false">{{$curso->nombre}}</a>
                          --}}
                          <a  class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-600 hover:text-white" wire:click="$set('category_id',{{$category->id}})" x-on:click="open=false">{{$category->nombre}}</a>
                           
                        @endforeach
                        

                    </div>
                    <!-- // Dropdown Body -->
                </div>
                
                
            </div>
    
    </div>    
    {{-- <p >category_id:{{$category_id}}</p> --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($programas as $programa)
    <x-programa-card :programa="$programa"/>
        @endforeach
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  mt-8  mb-8 ">
        {{$programas->links()}}
    </div>
   
</div>
