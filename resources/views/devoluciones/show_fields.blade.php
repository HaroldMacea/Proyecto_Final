<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $devoluciones->id }}</p>
</div>

<!-- Detalle Id Field -->
<div class="form-group">
    {!! Form::label('detalle_id', 'Detalle Id:') !!}
    <p>{{ $devoluciones->detalle_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $devoluciones->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $devoluciones->updated_at }}</p>
</div>

