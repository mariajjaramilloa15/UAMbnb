@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div>
    <div>
        <img class="center" src="https://i.pinimg.com/originals/1a/63/4c/1a634c21b9cb6d655fe957998b3c7f3c.jpg" width="780" height="250">
    </div>
    <br>
        <div class="d-flex justify-content-around">

            <a class="btn btn-primary" href="{{ url('/properties') }}" role="button">Arrendar</a>
            <a class="btn btn-primary" href="{{ url('/properties/create') }}" role="button">Publicar</a>
            <a class="btn btn-primary" href="{{ url('/sobreNosotros') }}" role="button">Sobre Nosotros</a>

        </div>




    </div>
</div>
@endsection
