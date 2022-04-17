@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Agregar Propietario</h1>
            <form method="POST" action="{{route("owners.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="label">Teléfono</label>
                    <input required autocomplete="off" name="telefono" class="form-control"
                           type="text" placeholder="Teléfono">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("owners.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
