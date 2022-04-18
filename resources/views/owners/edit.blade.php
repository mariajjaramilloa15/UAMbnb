@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-12">
            <h1>Editar Propietario</h1>
            <form method="POST" action="{{route("owners.edit", [$owner])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$owner->nombre}}" autocomplete="off" name="nombre" class="form-control"
                           type="string" placeholder="Name">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Propiedad</label>
                    <input required value="{{$owner->property}}" autocomplete="off" name="property" class="form-control"
                           type="string" placeholder="property">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Correo Electronico</label>
                    <input required value="{{$owner->email}}" autocomplete="off" name="email"
                           class="form-control"
                           type="string" placeholder="email">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Contraseña</label>
                    <input required value="{{$owner->password}}" autocomplete="off" name="password"
                           class="form-control"
                           type="string" placeholder="password">
                </div>
                <br>
                <div class="form-group">
                    <label class="label">Teléfono</label>
                    <input required value="{{$owner->telefono}}" autocomplete="off" name="telefono"
                           class="form-control"
                           type="string" placeholder="Teléfono">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("owners.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection
