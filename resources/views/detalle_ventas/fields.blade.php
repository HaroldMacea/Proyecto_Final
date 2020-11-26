<!-- Pedido Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    {!! Form::text('pedido_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Venta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_venta', 'Total Venta:') !!}
    {!! Form::text('total_venta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detalleVentas.index') }}" class="btn btn-default">Cancel</a>
</div>
