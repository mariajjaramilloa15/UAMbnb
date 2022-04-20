@extends("layouts.app")
@section("content")

<div class="text-center">
        <div class="form-group">
            <input htmlFor="Nombre">Nombre del Libro</input><br></br>
            <Field name="nombre" class="form-group"></Field>


        </div>

        <div class="form-group">
            <input htmlFor="NombreUsuario">Nombre del Usuario</input><br></br>
            <Field name="nombreUsuario" class="form-group"></Field>

        </div>

        <div class="form-group">
            <input htmlFor="ApellidoUsuario">Apellidos del Usuario</input><br></br>
            <Field name="ApellidoUsuario" class="form-group"></Field>


        </div>

        <div class="form-group">
            <input htmlFor="email">Email</input><br></br>
            <Field name="email" class="form-group"></Field>



        </div>
<a class="btn btn-primary" href="{{ url('https://www.pse.com.co/') }}" role="button">Pagar</a>
</div>

@endsection
