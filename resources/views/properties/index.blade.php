@extends("layouts.app")
@section("content")

    <div class="text-center">
        <h1 class="text-center">Inmuebles</h1>
        <a class="btn btn-outline-primary" href="{{ url('/home') }}" role="button">Volver</a>
        <a class="btn btn-outline-primary" href="{{ url('/properties/create') }}" role="button">Publicar</a>

       @include('layouts.subview-form-errors')

        {!! Form::open(['route' => 'properties.store', 'method' => 'property']) !!}
       @include('properties.subview-property')
        {!! Form::close() !!}

    <br>

    <div class="container">
        <x-maps-leaflet
            :centerPoint="['lat' => 5.067, 'long' => -75.517]"
            :markers="$data"
            :zoomLevel="6"
        ></x-maps-leaflet>
        </div>


    </div>

@endsection
