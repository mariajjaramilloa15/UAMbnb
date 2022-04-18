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
                           type="string" placeholder="Name">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Propiedad</label>
                    <input required autocomplete="off" name="property" class="form-control"
                           type="string" placeholder="Property">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Correo Electronico</label>
                    <input required autocomplete="off" name="email" class="form-control"
                           type="string" placeholder="Email">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Contraseña</label>
                    <input required autocomplete="off" name="password" class="form-control"
                           type="string" placeholder="Password">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Telefono</label>
                    <input required autocomplete="off" name="telefono" class="form-control"
                           type="string" placeholder="Teléfono">
                </div>
                <br>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("owners.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
