<div>
    @if ($table)
        <div class="card">
            <div class="card-header">
                <div class="row">
                        <div class="col-md-8">
                            <button wire:click='show_form_add' class="btn btn-primary">Agregar</button>
                        </div>
                        <div class="col-md-4">
                            <input wire:keydown="limpiar_page" wire:model ="search"class="form-control" placeholder="Escriba un nombre ..">
                        </div>

                </div>
            </div>
            @if (count($grupos_horarios))
                <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th>Programa</th>
                                    <th>Modulo</th>
                                    <th>Edicion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grupos_horarios as $programa_modulo)
                                    <tr>
                                        <td>{{$programa_modulo->id}}</td>    
                                        <td>{{ tipo_programa(programa($programa_modulo->programa_id)->tipo_id)->nombre }}</td>    
                                        <td>{{ programa($programa_modulo->programa_id)->nombre }}</td>    
                                        <td>{{modulo($programa_modulo->horario_id)->nombre}}</td>    
                                        <td>{{$programa_modulo->edicion}}</td>    
                                        <td>
                                            <button class="btn btn-success" wire:click="show_form_update({{$programa_modulo->id}})">Editar</button>
                                            <button class="btn btn-danger" wire:click="delete_programa_modulo({{$programa_modulo->id}})">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            
                    <div class="card-footer">
                        {{$grupos_horarios->links()}}
                    </div>
                
                @else
                <div class="card-body">
                        <strong> No hay  ningun registro</strong>
                </div>
            @endif
        </div>
    @else
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 text-left">
                    <span>
                        Agregar Programa Modulo
                    </span>
                    </div>
                    <div class="col-md-6 text-right">
                        <button wire:click='close_form_add' class="btn btn-primary">Regresar</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                <label for="" class="form-label">Aula</label>
                <input wire:model='aula' type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
                </div>

                <div class="mb-3" wire:ignore>
                    <label for="" class="form-label">Grupo</label>
                    <select name="" class="form-control" id="" wire:model='grupo_id'>
                        @if (is_null($grupo_id))
                            <option value="">Seleccione un grupo</option>
                        @endif
                        @foreach (grupos() as $grupo)
                            <option value="{{$grupo->id}}">{{$grupo->id}} </option>
                        @endforeach
                    </select>
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="mb-3" wire:ignore>
                    <label for="" class="form-label">Horario</label>
                    <select name="" id="" class="form-control" wire:model='horario_id'>
                        @if (is_null($horario_id))
                            <option value="">Seleccione un horario</option>
                        @endif
                        @foreach (horarios() as $horario)
                            <option value="{{$horario->id}}">
                                {{$horario->dia}} -  {{$horario->horaEntrada}}  &nbsp;&nbsp;  {{$horario->horaSalida}}</option>
                        @endforeach
                    </select>
                    <small id="helpId" class="text-muted"></small>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary" wire:click="save_or_update">Guardar</button>
            </div>
        </div>
    @endif    
</div>
    