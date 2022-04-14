@extends("principal")
@section("titulo", "Agregar Inmueble")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Agregar Inmueble</h1>
            <form method="POST" action="{{route("properties.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="name" class="form-control"
                           type="string" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Descripción</label>
                    <input required autocomplete="off" name="descripcion" class="form-control"
                           type="text" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label class="label">Precio de compra</label>
                    <input required autocomplete="off" name="precio" class="form-control"
                           type="integer" placeholder="Precio de compra">
                </div>
                <div class="form-group">
                    <label class="label">Comentarios</label>
                    <input required autocomplete="off" name="comentarios" class="form-control"
                           type="string" placeholder="Comentarios">
                </div>
                <div class="form-group">
                    <label class="label">Likes</label>
                    <input required autocomplete="off" name="likes" class="form-control"
                           type="integer" placeholder="Likes">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("properties.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection
