@extends("principal")
@section("titulo", "Editar Inmueble")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Editar Inmueble</h1>
            <form method="POST" action="{{route("properties.update", [$property])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$property->name}}" autocomplete="off" name="name"
                           class="form-control"
                           type="string" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Descripción</label>
                    <input required value="{{$property->descripcion}}" autocomplete="off" name="descripcion"
                           class="form-control"
                           type="text" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label class="label">Precio de compra</label>
                    <input required value="{{$property->precio}}" autocomplete="off" name="precio"
                           class="form-control"
                           type="integer" placeholder="Precio de compra">
                </div>
                <div class="form-group">
                    <label class="label">Comentarios</label>
                    <input required value="{{$property->comentarios}}" autocomplete="off" name="comentarios"
                           class="form-control"
                           type="string" placeholder="Comentarios">
                </div>
                <div class="form-group">
                    <label class="label">Likes</label>
                    <input required value="{{$property->likes}}" autocomplete="off" name="likes"
                           class="form-control"
                           type="integer" placeholder="Likes">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("properties.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection
