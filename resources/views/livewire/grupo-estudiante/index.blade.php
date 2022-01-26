<div>
    @if ($table)

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <button wire:click='show_form_add' class="btn btn-primary">Agregar</button>
                    </div>
                    <div class="col-md-4">
                        <input wire:keydown="limpiar_page" wire:model="search" class="form-control"
                            placeholder="Escriba un nombre ..">
                    </div>
                </div>
            </div>
            @if (count($grupos_estudiantes))
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Registro</th>
                                <th>Estudiante</th>
                                <th>Modulo</th>
                                <th>Docente</th>
                                <th>Nota</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grupos_estudiantes as $grupo_estudiante)
                                <tr>
                                    <td>{{ $grupo_estudiante->id }}</td>
                                    <td>{{ $grupo_estudiante->Nregistro }}</td>
                                    <td>
                                        {{ $grupo_estudiante->nombre }}
                                        {{ $grupo_estudiante->paterno }}
                                        {{ $grupo_estudiante->materno }}
                                    </td>
                                    <td>{{ modulo(programa_modulo($grupo_estudiante->programa_modulo_id)->modulo_id)->nombre }}
                                    </td>
                                    <td>{{ docente($grupo_estudiante->docente_id)->nombre }}</td>
                                    <td>{{ $grupo_estudiante->nota }}</td>
                                    <td>
                                        @if ($grupo_estudiante->nota == 0)
                                            <span class="badge bg-success">En curso</span>
                                        @endif
                                        @if ($grupo_estudiante->nota < 51 && $grupo_estudiante->nota > 0)
                                            <span class="badge bg-danger">Reprobado</span>
                                        @endif
                                        @if ($grupo_estudiante->nota > 51)
                                            <span class="badge bg-info">Aprobado</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-primary"
                                            wire:click='show_edit({{ $grupo_estudiante->id }})'>
                                            Editar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    {{ $grupos_estudiantes->links() }}
                </div>

            @else
                <div class="card-body">
                    <strong> No hay ningun registro</strong>
                </div>
            @endif
        </div>
    @else

        @if ($isEdit)
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <span>
                                Editar Programa Modulo
                            </span>
                        </div>
                        <div class="col-md-6 text-right">
                            <button wire:click='close_form_add' class="btn btn-primary">Regresar</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" wire:model class="form-label">Nota</label>
                                <input type="number" wire:model='new_nota' placeholder="{{grupo_estudiante($grupo_estudiante_id)->nota}}" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <small id="helpId" class="text-muted"></small>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-6">
                        <div class="mb-3" wire:ignore>
                            <label for="" class="form-label">Grupo</label>
                            <select name="" class="form-control" id="" wire:model='new_grupo_id'>
                                @foreach (grupos() as $grupo)
                                    <option value="{{ $grupo->id }}">{{ $grupo->id }} </option>
                                @endforeach
                            </select>
                            <small id="helpId" class="text-muted"></small>
                        </div>
                    </div> --}}
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" wire:click='update_grupo_estudiante'>Editar</button>
                </div>
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
                    <div class="row">
                        {{--<div class="col-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Nota</label>
                                <input wire:model='nota' type="number" name="" placeholder="Nota" id="" class="form-control"
                                    placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"></small>
                            </div>
                        </div>--}}

                        <div class="col-12">
                            <div class="mb-3" wire:ignore>
                                <select name="" id="" class="form-control" wire:model='estudiante_id'>
                                    @if (is_null($estudiante_id))
                                        <option value="">Seleccione un Estudiante</option>
                                    @endif
                                    @foreach (estudiantes_inscritos() as $estudiante)
                                        <option value="{{ $estudiante->id }}">
                                            {{ estudiante($estudiante->id)->nombre }} {{ estudiante($estudiante->id)->paterno }}
                                            {{ estudiante($estudiante->id)->materno }}
                                        </option>
                                    @endforeach
                                </select>
                                <small id="helpId" class="text-muted"></small>
                            </div>
                        </div>

                        @if ($estudiante_id)
                            <div class="col-12">
                                <div class="mb-3">
                                    <select name="" class="form-control" id="" wire:model='programa_id'>
                                        @if (is_null($programa_id))
                                            <option value="">Seleccione un programa</option>
                                        @endif
                                        @foreach (programa_estudiante($estudiante_id) as $programa)
                                            <option value="{{ $programa->programa_id }}">{{ programa($programa->programa_id)->nombre }} </option>
                                        @endforeach
                                    </select>
                                    <small id="helpId" class="text-muted"></small>
                                </div>
                            </div>

                            @if ($programa_id)
                                <div class="col-12">
                                    <div class="mb-3">
                                        <select name="" class="form-control" id="" wire:model='grupo_id'>
                                            @if (is_null($grupo_id))
                                                <option value="">Seleccione un grupo</option>
                                            @endif
                                            @foreach (grupos_programa($programa_id) as $grupo)
                                                <option value="{{ $grupo->id }}">{{ $grupo->id }} </option>
                                            @endforeach
                                        </select>
                                        <small id="helpId" class="text-muted"></small>
                                    </div>
                                </div>
                            @else
                                <div class="col-12">
                                    <div class="alert alert-info" role="alert">
                                        Seleccione un grupo
                                    </div>
                                </div>
                            @endif
                        @else
                            <div class="col-12">
                                <div class="alert alert-info" role="alert">
                                    <strong>Seleccion un estudiante</strong>
                                </div>
                            </div>
                        @endif

                    </div>

                    <div class="row m-3">
                        <button class="btn btn-success" wire:click="add_array">Añadir</button>
                    </div>

                    <div class="card p-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nota</th>
                                    <th>Grupo</th>
                                    <th>Docente</th>
                                    <th>Modulo</th>
                                    <th>Programa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($array_grupo) > 0)
                                    @for ($i = 0; $i < $count; $i++)
                                        <tr>
                                            <td scope="row">
                                                @if ($array_grupo[$i]['nota'] == 0)
                                                    <span class="badge bg-danger">En curso</span>
                                                @else
                                                    {{ $array_grupo[$i]['nota'] }}
                                                @endif
                                            </td>
                                            <td scope="row">{{ $array_grupo[$i]['grupo_id'] }}</td>
                                            <td scope="row">
                                                {{ docente(grupo($array_grupo[$i]['grupo_id'])->docente_id)->nombre }}
                                            </td>
                                            <td>
                                                {{ modulo(programa_modulo(grupo($array_grupo[$i]['grupo_id'])->programa_modulo_id)->modulo_id)->nombre }}
                                            </td>
                                            <td>
                                                {{ programa(programa_modulo(grupo($array_grupo[$i]['grupo_id'])->programa_modulo_id)->modulo_id)->nombre }}
                                            </td>
                                        </tr>
                                    @endfor
                                @else
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-primary text-center" role="alert">
                                                <strong>No existen registros</strong>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" wire:click="save_grupo_estudiante">Guadfhsghrdar</button>
                </div>
            </div>
        @endif
    @endif
</div>


{{-- 'nota' => $this->nota,
'grupo_id' => $this->grupo_id,
'estudiante_id' => $this->estudiante_id, --}}
