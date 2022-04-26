@forelse ($properties as $property)

<div class="content">
        <div class="card-body d-flex justify-content-between">
            <div class="centrar">
                <div class="card" style="width: 20rem; height:47rem;">
                    <img src="https://i.pinimg.com/564x/16/3f/c4/163fc488f6683ef1008563e189c04e23.jpg" class="card-img-top" width="250" height="340">
                    <div class="card-img-top">{{ $property->post }}</div>
                    <div class="card-body">
                      <p class="card-text">{{ $property->name }}</p>
                      <p class="card-text">{{ $property->descripcion }}</p>
                      <p class="card-text">{{ $property->precio }}</p>
                      <p class="card-text">{{ $property->likes }}</p>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $property->created_at->diffForHumans()}}</h6>
                      <a href="{{ url('/property') }}" class="btn btn-primary">Ver Inmueble</a>
                      <div class="text-right-center">
                          <br>
                        <a href="{{ route('properties.edit', $property->id) }}" class= "btn btn-outline-primary">
                            <i class="fa-solid fa-pen-to-square" title="Editar Inmueble"></i>
                        </a>

                    {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}

                    {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                        'type' => 'submit',
                        'title' => "Remover Inmueble",
                        'class' => 'btn btn-danger',
                        'onclick' => "return confirm('¿Está seguro de remover este inmueble?')"
                    ]) !!}

                    {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@empty
    <div class="alert alert-info" role="alert">
        No hay Propiedades para mostrar
    </div>
@endforelse
