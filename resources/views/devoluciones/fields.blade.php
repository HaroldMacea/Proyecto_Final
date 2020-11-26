<!-- Detalle Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detalle_id', 'Detalle Id:') !!}
    {!! Form::text('detalle_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('devoluciones.index') }}" class="btn btn-default">Cancel</a>
</div>
