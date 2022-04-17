@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Agregar Inmueble</h1>
            @include('layouts.subview-form-errors')

{!! Form::open(['route' => 'properties.store', 'method' => 'property']) !!}
        @include('properties.subview-property-fields')

    <button type="submit" class="btn btn-outline-info">Crear</button>
{!! Form::close() !!}
        </div>
    </div>
@endsection
