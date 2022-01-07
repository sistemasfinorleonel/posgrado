@props(['programa'])

<article class="bg-white shadow-lg rounded overflow-hidden">
    <img  class="h-36 w-full object-cover" git src="{{Storage::url($programa->image->url)}}" alt=""> 
     {{-- <img class="h-36 w-full object-cover" src="{{Storage::url($programa->images->url)}}" alt=""> --}}
     <div class="px-6 py-4">
         <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($programa->nombre,40)}}</h1>
         {{-- <p class="text-gray-">Prof.: {{$programa->docentes->nombre}}</p> --}}

         <ul class="flex text-sm">
             {{-- <li class="mr-1">
                 <i class="fas fa-star text"></i>
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
             </li> --}}
         </ul>
         <a href="{{route('programas.show',$programa)}}" class="block text center w-full mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
             Mas informacion
         </a>

     </div>
 </article>
