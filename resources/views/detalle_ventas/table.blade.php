<div class="table-responsive">
    <table class="table" id="detalleVentas-table">
        <thead>
            <tr>
                <th>Pedido Id</th>
        <th>Total Venta</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalleVentas as $detalleVenta)
            <tr>
                <td>{{ $detalleVenta->pedido_id }}</td>
            <td>{{ $detalleVenta->total_venta }}</td>
                <td>
                    {!! Form::open(['route' => ['detalleVentas.destroy', $detalleVenta->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalleVentas.show', [$detalleVenta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('detalleVentas.edit', [$detalleVenta->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
