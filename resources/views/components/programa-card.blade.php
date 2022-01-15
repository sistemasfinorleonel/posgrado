@props(['programa'])

<article class="card">
    <img  class="h-36 w-full object-cover" git src="{{Storage::url($programa->image->url)}}" alt=""> 
     
     <div class="card-body">
         <h1 class="card-title">{{Str::limit($programa->nombre,40)}}</h1>
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

         <a href="{{route('programas.show',$programa)}}" class="b mt-4 btn btn-primary btn-block">
             Mas informacion
         </a>
     </div>
 </article>