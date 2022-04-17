@extends("layouts.app")
@section("content")

    <div class="text-center">
            <h1>Inmuebles</h1>

    {!! Form::open(['route' => 'properties.store', 'method' => 'property']) !!}
        @include('properties.subview-property')
    {!! Form::close() !!}

    </div>

@endsection
