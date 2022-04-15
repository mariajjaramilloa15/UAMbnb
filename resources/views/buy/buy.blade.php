@extends("principal")
@section("titulo", "Realizar venta")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Nueva compra <i class="fa fa-cart-plus"></i></h1>
            @include("notificacion")
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route("terminarOCancelarCompra")}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="id_cliente">Cliente</label>
                            <select required class="form-control" name="id_cliente" id="id_cliente">
                                @foreach($clientes as $cliente)
                                    <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if(session("inmuebles") !== null)
                            <div class="form-group">
                                <button name="accion" value="terminar" type="submit" class="btn btn-success">Terminar
                                    servicio
                                </button>
                                <button name="accion" value="cancelar" type="submit" class="btn btn-danger">Cancelar
                                    servicio
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <form action="{{route("agregarProductoCompra")}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="codigo">Código de barras</label>
                            <input id="codigo" autocomplete="off" required autofocus name="codigo" type="text"
                                   class="form-control"
                                   placeholder="Código de barras">
                        </div>
                    </form>
                </div>
            </div>
            @if(session("inmuebles") !== null)
                <h2>Total: ${{number_format($total, 2)}}</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio de compra</th>
                            <th>Comentarios</th>
                            <th>Likes</th>
                            <th>Cantidad</th>
                            <th>Quitar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(session("inmuebles") as $property)
                            <tr>
                                <td>{{$property->name}}</td>
                                <td>{{$property->descripcion}}</td>
                                <td>${{number_format($property->precio_venta, 2)}}</td>
                                <td>{{$property->cantidad}}</td>
                                <td>
                                    <form action="{{route("quitarProductoDeCompra")}}" method="post">
                                        @method("delete")
                                        @csrf
                                        <input type="hidden" name="indice" value="{{$loop->index}}">
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
            @else
                <h2>Aquí aparecerán los productos de la compra o alquiler
                    <br>
                </h2>
            @endif
        </div>
    </div>
@endsection
