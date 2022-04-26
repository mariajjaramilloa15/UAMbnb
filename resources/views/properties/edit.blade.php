@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="text-center">Editar un Inmueble</h1>
        @include('layouts.subview-form-errors')

        {!! Form::model($property, ['method' => 'put', 'route' => ['properties.update', $property->id]]) !!}

        @include('properties.subview-property-fields')

        <button type="submit" class="btn btn-outline-primary">Editar</button>

        {!! Form::close() !!}

</div>
@endsection
