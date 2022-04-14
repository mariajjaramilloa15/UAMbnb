@extends("principal")
@section("titulo", "Inmuebles")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Inmuebles <i class="fa fa-box"></i></h1>
            <a href="{{route("properties.create")}}" class="btn btn-success mb-2">Agregar Inmueble</a>
            @include("notificacion")
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio de compra</th>
                        <th>Comentarios</th>
                        <th>Likes</th>

                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $property)
                        <tr>
                            <td>{{$property->name}}</td>
                            <td>{{$property->descripcion}}</td>
                            <td>{{$property->precio}}</td>
                            <td>{{$property->comentarios}}</td>
                            <td>{{$property->likes}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route("properties.edit",[$property])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("properties.destroy", [$property])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
