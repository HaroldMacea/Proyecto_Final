<div class="table-responsive">
    <table class="table" id="devoluciones-table">
        <thead>
            <tr>
                <th>Detalle Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($devoluciones as $devoluciones)
            <tr>
                <td>{{ $devoluciones->detalle_id }}</td>
                <td>
                    {!! Form::open(['route' => ['devoluciones.destroy', $devoluciones->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('devoluciones.show', [$devoluciones->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('devoluciones.edit', [$devoluciones->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
