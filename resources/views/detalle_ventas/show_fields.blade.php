<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $detalleVenta->id }}</p>
</div>

<!-- Pedido Id Field -->
<div class="form-group">
    {!! Form::label('pedido_id', 'Pedido Id:') !!}
    <p>{{ $detalleVenta->pedido_id }}</p>
</div>

<!-- Total Venta Field -->
<div class="form-group">
    {!! Form::label('total_venta', 'Total Venta:') !!}
    <p>{{ $detalleVenta->total_venta }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $detalleVenta->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $detalleVenta->updated_at }}</p>
</div>

