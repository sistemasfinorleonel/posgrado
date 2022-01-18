<div>

    <div class="card">

        {!! Form::open(['route' => 'admin.inscripcions.store']) !!}
    
                <div class="card-header">
                    <label for="">buscar programa</label>
                    <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre Programa ..">
                    <br>
                    @if ($search)
                        <ul class ="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
                            @forelse ($this->results as $result) 
                            <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                            <input type="checkbox" name="programaid[]" id="" value="{{$result->id}}">{{$result->nombre}}
                            </li>
                            @empty
                            <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                                No hay ninguna coincidencia :(
                            </li>
                            @endforelse
                        </ul>
                    @endif
            
                </div>
                <div class="card-header">
                    <label for="">Buscar por  Numero de Reguistro</label>
                    <input wire:keydown="limpiar_page" wire:model ="searchestudiante"class="form-control" placeholder="Escriba un nombre Programa ..">
                    <br>
                    @if ($searchestudiante)
                        <ul class ="absolute z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
                            @forelse ($this->resultsestudiantes as $resultsestudiante) 
                            <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                            <input type="checkbox" name="estudianteid[]" id="" value="{{$resultsestudiante->id}}">{{$resultsestudiante->Nregistro}}{{$resultsestudiante->nombre}}{{$resultsestudiante->paterno}}
                            </li>
                            @empty
                            <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-gray-300">
                                No hay ninguna coincidencia :(
                            </li>
                            @endforelse
                        </ul>
                    @endif
            
                </div>    
            {!! Form::submit('CREAR NUEVO REGISTRO', ['class'=>'btn btn-primary'])  !!}
           {!! Form::close() !!}
        </div> 
</div>

    