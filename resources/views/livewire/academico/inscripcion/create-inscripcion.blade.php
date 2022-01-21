<div>
    <div class="card">
        
        {!! Form::open(['route' => 'admin.inscripcions.store']) !!}
    <div class="row">
        <div class="col">    
                <div class="card-header">
                    <label for="">Buscar por nombre de programa</label>
                    <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre Programa ..">
                    <br>
                    @if ($search)
                    <ul class ="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
                      <select name="programaid" id="">
                        @forelse ($this->results as $result) 
                        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                     <option value="{{$result->id}}">
                        <strong>Tipo:</strong> {{$result->nombre_tipo}}
                        <strong>Nombre:</strong>{{$result->nombre}} 
                        </option> </li>
                        @empty
                        <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                            No hay ninguna coincidencia :(
                        </li>
                        @endforelse
                    </select>
                    </ul>
                @endif
            
                </div>
        </div>
    <div class="col">    
                <div class="card-header">
                    <label for="">Buscar por  número de Registro</label>
                    <input wire:keydown="limpiar_page" wire:model ="searchestudiante"class="form-control" placeholder="Escriba un nombre Programa ..">
                    <br>
                    @if ($searchestudiante)
                        <ul class ="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
                          <select name="estudianteid" id="">
                            @forelse ($this->resultsestudiantes as $resultsestudiante) 
                            <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                         <option value="{{$resultsestudiante->id}}"><strong>Nro:</strong> {{$resultsestudiante->Nregistro}}
                            <strong>Nombre:</strong>{{$resultsestudiante->nombre}} 
                            <strong>App:</strong>{{$resultsestudiante->paterno}}</option> </li>
                            @empty
                            <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                                No hay ninguna coincidencia :(
                            </li>
                            @endforelse
                        </select>
                        </ul>
                    @endif
            
                </div>    
    </div>
    </div>
                {!! Form::submit('Realizar inscripcón', ['class'=>'btn btn-primary'])  !!}
           {!! Form::close() !!}
        </div> 

</div>
