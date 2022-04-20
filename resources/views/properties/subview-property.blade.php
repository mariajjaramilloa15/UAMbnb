@forelse ($properties as $property)

<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">

                <div class="card" style="width: 15rem;">
                    <div class="card-img-top">{{ $property->post }}</div>
                    <div class="card-body">
                      <p class="card-text">{{ $property->name }}</p>
                      <p class="card-text">{{ $property->descripcion }}</p>
                      <p class="card-text">{{ $property->precio }}</p>
                      <p class="card-text">{{ $property->likes }}</p>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $property->created_at->diffForHumans()}}</h6>
                      <a href="{{ url('/property') }}" class="btn btn-primary">Ver Inmueble</a>
                    </div>
                </div>

     @auth
     @if ($property->user_id == Auth::id())

        <div class="text-right">
            <a href="{{ route('properties.edit', $property->id) }}" class= "btn btn-outline-info">
                <i class="fa-solid fa-pen-to-square" tittle="Editar "></i>
            </a>

            <br>

                {!! Form::open(['route'=> ['properties.destroy', $property->id], 'method'=> 'delete'])  !!}

                {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                    'type' =>'submit',
                    'tittle' => "Remover Inmueble",
                    'class' => 'btn btn-outline-danger',
                    'onclick' => "return confirm('¿Está seguro?')"
                ])  !!}

                {!! Form::close() !!}

        </div>
     @endif
     @endauth


    </div>
</div>
@empty
    <div class="alert alert-info" role="alert">
        No hay Propiedades para mostrar
    </div>
@endforelse
