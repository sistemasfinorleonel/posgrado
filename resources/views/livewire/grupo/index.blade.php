<div>
    @if ($table)
        <div class="card">
            <div class="card-header">
                <div class="row">
                        <div class="col-md-8">
                            <button wire:click='show_form_add' class="btn btn-primary">Agregar</button>
                        </div>
                        <div class="col-md-4">
                            <input type="date" wire:model ="fecha_ini"class="form-control" placeholder="Escriba un nombre ..">
                            <input type="date" wire:model ="fecha_fin"class="form-control" placeholder="Escriba un nombre ..">
                        </div>
                </div>
            </div>
            @if (count($grupos))
                <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha Inicial</th>
                                    <th>Fecha Final</th>
                                    <th>Docente</th>
                                    <th>Programa</th>
                                    <th>Modulo</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($grupos as $grupo)
                                    <tr>
                                        <td>{{$grupo->id}} </td>   
                                        <td>{{$grupo->fecha_ini}}</td>    
                                        <td>{{$grupo->fecha_fin}}</td>    
                                        <td>{{docente($grupo->docente_id)->nombre}}</td>    
                                        <td>{{programa(programa_modulo($grupo->programa_modulo_id)->programa_id)->nombre}}</td>    
                                        <td>{{modulo(programa_modulo($grupo->programa_modulo_id)->modulo_id)->nombre}}</td>    
                                        <td>
                                            <button class="btn btn-success btn-sm" wire:click="show_form_update({{$grupo->id}})">Editar</button>
                                            <button class="btn btn-danger btn-sm" wire:click="delete_grupo_horario({{$grupo->id}})">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            
                    <div class="card-footer">
                        {{$grupos->links()}}
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
                        Agregar Grupo
                    </span>
                    </div>
                    <div class="col-md-6 text-right">
                        <button wire:click='close_form_add' class="btn btn-primary">Regresar</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Fecha Inicio</label>
                    <input wire:model='fecha_ini' type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Fecha Final</label>
                    <input wire:model='fecha_fin' type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="mb-3" wire:ignore>
                    <label for="" class="form-label">Docente</label>
                    <select name="" class="form-control" id="" wire:model='docente_id'>
                        @if (is_null($docente_id))
                            <option value="">Seleccione un Docente</option>
                        @endif
                        @foreach (docentes() as $docente)
                            <option value="{{$docente->id}}">{{$docente->nombre}} </option>
                        @endforeach
                    </select>
                    <small id="helpId" class="text-muted"></small>
                </div>

                <div class="mb-3" wire:ignore>
                    <label for="" class="form-label">Programa - Modulo</label>
                    <select name="" id="" class="form-control" wire:model='programa_modulo_id'>
                        @if (is_null($programa_modulo_id))
                            <option value="">Seleccione un horario</option>
                        @endif
                        @foreach (programa_modulos() as $programa_modulo)
                            <option value="{{$programa_modulo->id}}">
                                {{modulo($programa_modulo->modulo_id)->nombre}} -  {{programa($programa_modulo->programa_id)->nombre}}
                            </option>
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
    
