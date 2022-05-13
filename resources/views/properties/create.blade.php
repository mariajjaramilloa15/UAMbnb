@extends("layouts.app")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Agregar Propiedad</h1>

    @include('layouts.subview-form-errors')

    {!! Form::open(['route' => 'properties.store', 'method' => 'property']) !!}
        @include('properties.subview-property-fields')

        <div class="row justify-content-center">
            @forelse ($properties as $property)
                @empty
                <div class="alert alert-info" role='alert'>
                     El usuario no ha registrado ningún Inmueble.
                </div>
            @endforelse

        </div>

            <input type="text" name="nombre" placeholder="ingrese nombre:">
            <input type="file" name="imagen">

         <br><br>
            <button type="submit" class="btn btn-outline-primary">Guardar</button>
        {!! Form::close() !!}

        <br>
                <a class="btn btn-outline-primary" href="{{route('properties.index')}}">Volver al listado</a>
        </div>
    </div>
</div>
@endsection
