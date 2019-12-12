<div class="form-group {{ $errors->has('granja_id') ? 'has-error' : ''}}">
    <label for="granja_id" class="control-label">{{ 'Granja Id' }}</label>
    <input class="form-control" name="granja_id" type="number" id="granja_id" value="{{ isset($nafe->granja_id) ? $nafe->granja_id : ''}}" >
    {!! $errors->first('granja_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('secciones') ? 'has-error' : ''}}">
    <label for="secciones" class="control-label">{{ 'Secciones' }}</label>
    <input class="form-control" name="secciones" type="number" id="secciones" value="{{ isset($nafe->secciones) ? $nafe->secciones : ''}}" required>
    {!! $errors->first('secciones', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tipo_de_nave') ? 'has-error' : ''}}">
    <label for="tipo_de_nave" class="control-label">{{ 'Tipo De Nave' }}</label>
    <input class="form-control" name="tipo_de_nave" type="text" id="tipo_de_nave" value="{{ isset($nafe->tipo_de_nave) ? $nafe->tipo_de_nave : ''}}" >
    {!! $errors->first('tipo_de_nave', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($nafe->status) ? $nafe->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
