@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">Usuarios Registrados</h1>

    @forelse ($users as $user)
        <div class="card mb-2">
            <div class="card-body">

                <h5 class="card-title">{{$user->name}}</h5>

                <h6 class="card-subtitle mb-2 text-muted">{{$user->created_at->diffForHumans()}}</h6>
                <p class="card-text">{{$user->email}}</p>
            </div>
        </div>
    @empty
    <div class="alert alert-info" role="alert">
        No hay usuarios registrados.
    </div>
@endforelse
<div class="mt-3"> {{ $users->links() }} </div>
</div>

@endsection
