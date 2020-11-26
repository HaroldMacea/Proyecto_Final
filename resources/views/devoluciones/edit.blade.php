@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Devoluciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($devoluciones, ['route' => ['devoluciones.update', $devoluciones->id], 'method' => 'patch']) !!}

                        @include('devoluciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection