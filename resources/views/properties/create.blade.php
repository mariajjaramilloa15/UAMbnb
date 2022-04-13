@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Crear nuevo Inmueble</h1>

    @include('layouts.subview-form-errors')

    {!! Form::open(['route' => 'properties.store', 'method' => 'property']) !!}

        @include('properties.subview-property-fields')

        <button type="submit" class="btn btn-primary">Crear</button>

    {!! Form::close() !!}
</div>


@endsection
