<div class="form-group {{ $errors->has('animal_id') ? 'has-error' : ''}}">
    <label for="animal_id" class="control-label">{{ 'Animal Id' }}</label>
    <input class="form-control" name="animal_id" type="number" id="animal_id" value="{{ isset($vacuna->animal_id) ? $vacuna->animal_id : ''}}" >
    {!! $errors->first('animal_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="nombre" type="text" id="nombre" value="{{ isset($vacuna->nombre) ? $vacuna->nombre : ''}}" required>
    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($vacuna->tipo) ? $vacuna->tipo : ''}}" required>
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('caducidad') ? 'has-error' : ''}}">
    <label for="caducidad" class="control-label">{{ 'Caducidad' }}</label>
    <input class="form-control" name="caducidad" type="date" id="caducidad" value="{{ isset($vacuna->caducidad) ? $vacuna->caducidad : ''}}" >
    {!! $errors->first('caducidad', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
