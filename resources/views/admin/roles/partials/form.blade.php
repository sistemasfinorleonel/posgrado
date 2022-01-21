    <div class="form-group">
        {!! Form::label('name','Nombre:') !!}
        {!! Form::text('name',null, ['class'=>'form-control'. ($errors->has('name')?' is-invalid':''),'placeholder'=>'Escriba un Nombre']) !!}  
            @error('name')
                <span class="invalid-feedback">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
    </div>
     <strong class="my-12"> LISTA DE PERMISOS</strong>
    
     @error('permissions')
        <small class="text-danger">
            <strong>
                {{$message}}
            </strong>
         </small>
        <br>
    @enderror
    
     @foreach ($permissions as $permission)
       <div>
            <label >
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
                {{$permission->name}}
            </label>
        </div>
     @endforeach