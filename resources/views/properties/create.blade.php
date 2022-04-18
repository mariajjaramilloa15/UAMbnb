@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Agregar Propiedad</h1>
            <form method="POST" action="{{route("properties.store")}}">
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

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("properties.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
