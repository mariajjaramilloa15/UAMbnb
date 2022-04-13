@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="text-center">Registrar un nuevo usuario</h1>
   <div class="abs-center">
    {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
        <div class="mb-3 form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputEmail1">Correo Electronico</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Correo">
            <small id="emailHelp" class="form-text text-muted">No compartiremos tú información con nadie más.</small>
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
       </div>
    {!! Form::close() !!}

</div>
<br></br>
<footer class="page-footer font-small blue pt-4 ">
<!-- Copyright -->
<div class="footer-copyright text-center py-3">Desarrollado en programación Backend

  <!-- Copyright -->

</footer>
@endsection
