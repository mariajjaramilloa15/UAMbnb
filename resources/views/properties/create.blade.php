@extends("layouts.app")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Agregar Propiedad</h1>
            <form method="POST" action="{{route("properties.store")}}">

                <div class="row justify-content-center">
                    @forelse ($properties as $property)
                        <div class="card mb-3" >
                            <div class="card-body border-0">
                                @include('properties.subview-property', ['user'=>Auth::user()])
                            </div>
                        </div>
        @empty
                        <div class="alert alert-info" role='alert'>
                             El usuario no ha registrado ningun Inmueble.
                        </div>
                    @endforelse

            </div>


                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Name">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Descripcion</label>
                    <input required autocomplete="off" name="descripcion" class="form-control"
                           type="text" placeholder="descripcion">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Area</label>
                    <input required autocomplete="off" name="area" class="form-control"
                           type="integer" placeholder="Area">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Caracteristicas</label>
                    <input required autocomplete="off" name="caracteristicas" class="form-control"
                           type="text" placeholder="Caracteristicas">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Precio</label>
                    <input required autocomplete="off" name="precio" class="form-control"
                           type="integer" placeholder="Precio">
                </div>
                <br>

                <form action="image" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="text" name="nombre" placeholder="ingrese nombre:">
                    <input type="file" name="imagen">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                 </form>
                 <br>

                @include("notificacion")

                @include('layouts.subview-form-errors')

                {!! Form::open(['route' => 'properties.store', 'method' => 'property']) !!}

                <button type="submit" class="btn btn-outline-info">Guardar</button>
                {!! Form::close() !!}


                <a class="btn btn-primary" href="{{route("properties.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
</div>
@endsection
