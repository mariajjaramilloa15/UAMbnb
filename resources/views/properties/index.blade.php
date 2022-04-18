@extends("layouts.app")
@section("content")

    <div class="text-center">
        <h1 class="text-center">Inmueble</h1>
       @include('layouts.subview-form-errors')

     {!! Form::model($property, ['method' => 'post', 'route' => ['properties.store', $property->id]]) !!}
        @include('properties.subview-property')
     {!! Form::close() !!}

     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15897.81167237157!2d-75.46941715!3d5.03005245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1650291659549!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

@endsection
