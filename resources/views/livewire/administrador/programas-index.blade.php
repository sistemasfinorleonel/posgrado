<div class="container " >
<!-- This example requires Tailwind CSS v2.0+ -->
    <x-table-responsive>
                <div class="px-6 py-4">
                   <input wire:keydown="limpiar_page" wire:model="search" class="form-input w-full shadow-sm" placeholder="INGRESE EL NOMBRE DEL CURSO">
                </div>
                @if ($programas->count())
                    <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    NOMBRE
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Version
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Duracion
                                        </th>
                                    
                                    <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($programas as $programa)
                                    
                            
                                    <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="{{Storage::url($programa->image->url)}}" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                    {{$programa->nombre}}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                    {{$programa->tipoprograma->nombre}}
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$programa->id}}</div>
                                                <div class="text-sm text-gray-500">Version del modulos</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$programa->duracionMeses}}</div>
                                                <div class="text-sm text-gray-500">Meses</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Admin
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                    </tr>
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                    </table>
                @else
                <div class="card-body">
                    <strong> No hay  ningun registro</strong>
                 </div>
                    
                @endif

                    <div class="px-6 py-4">
                        {{$programas->links()}}
                    </div>

   </x-table-responsive>
  
</div>
