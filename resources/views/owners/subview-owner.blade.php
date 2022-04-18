<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>

            <p class="card-text">{{ $owner->name }}</p>
            <h6 class="card-subtitle mb-2 text-muted">{{ $owner->created_at->diffForHumans()}}</h6>
        </div>

     @auth
     @if ($owner->user_id == Auth::id())

        <div class="text-right">
            <a href="{{ route('owners.edit', $owner->id) }}" class= "btn btn-outline-info">
                <i class="fa-solid fa-pen-to-square" tittle="Editar "></i>
            </a>

            <br></br>

                {!! Form::open(['route'=> ['owners.destroy', $owner->id], 'method'=> 'delete'])  !!}

                {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                    'type' =>'submit',
                    'tittle' => "Remover Propietario",
                    'class' => 'btn btn-outline-danger',
                    'onclick' => "return confirm('¿Está seguro?')"
                ])  !!}

                {!! Form::close() !!}

        </div>
    @endif
     @endauth
    </div>
</div>
