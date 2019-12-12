<div class="form-group {{ $errors->has('raza') ? 'has-error' : ''}}">
    <label for="raza" class="control-label">{{ 'Raza' }}</label>
    <input class="form-control" name="raza" type="text" id="raza" value="{{ isset($animale->raza) ? $animale->raza : ''}}" required>
    {!! $errors->first('raza', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="tipo" type="text" id="tipo" value="{{ isset($animale->tipo) ? $animale->tipo : ''}}" required>
    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lote') ? 'has-error' : ''}}">
    <label for="lote" class="control-label">{{ 'Lote' }}</label>
    <input class="form-control" name="lote" type="number" id="lote" value="{{ isset($animale->lote) ? $animale->lote : ''}}" >
    {!! $errors->first('lote', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="text" id="cantidad" value="{{ isset($animale->cantidad) ? $animale->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nave_id') ? 'has-error' : ''}}">
    <label for="nave_id" class="control-label">{{ 'Nave Id' }}</label>
    <input class="form-control" name="nave_id" type="number" id="nave_id" value="{{ isset($animale->nave_id) ? $animale->nave_id : ''}}" >
    {!! $errors->first('nave_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
