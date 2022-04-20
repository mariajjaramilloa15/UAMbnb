@extends("layouts.app")
@section("content")

<div class="centrar1">
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      


<a class="btn btn-primary" href="{{ url('https://www.pse.com.co/') }}" role="button">Pagar</a>
</div>

@endsection
