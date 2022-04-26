@extends("layouts.app")
@section("content")

<div class="container">
<div class = "centrar">

<div class="row">
<div class="col-6">
<div class="card mt-5 " style= "width: 280px">

  <div class="card-body">
    <img src="https://i.pinimg.com/564x/16/3f/c4/163fc488f6683ef1008563e189c04e23.jpg" class="card-img-top" alt="...">
      <h5 class="card-title">APARTAMENTO</h5>
      <p class="card-text">$1'200.000</p>
    </div>
  </div>
  <br>
</div>

<div class="col-6">
<br>
<br>
<br>
    <h5 class="card-title">DESCRIPCIÓN</h5>
    <p class="card-text">Iluminado apartamento, segundo piso, ascensor, vista exterior, sala-comedor, dos alcobas, estudio, garaje cubierto independiente, conjunto parque infantil, salón comunal, cerca a centro comercial.</p>
<br>
<h5 class="card-title">CARACTERISTICAS</h5>
    <p class="card-text">Calentador a gas, Cocina Integral, Garaje Independiente, Iluminación natural,
        Sala-Comedor, Vista exterior, Zona de ropas, Ascensor, En conjunto cerrado, Garaje Cubierto,
        Portería/Vigilancia, Salón Comunal, Zona Infantil, Zona Comercial y universitaria, Zona Residencial</p>
<br>
<a class="btn btn-primary" href="{{ url('/pay') }}" role="button">Arrendar</a>

<br>
</div>

<form>
    <p class="clasificacion">
      <input id="radio1" type="radio" name="estrellas" value="5"><!--
      --><label for="radio1">★</label><!--
      --><input id="radio2" type="radio" name="estrellas" value="4"><!--
      --><label for="radio2">★</label><!--
      --><input id="radio3" type="radio" name="estrellas" value="3"><!--
      --><label for="radio3">★</label><!--
      --><input id="radio4" type="radio" name="estrellas" value="2"><!--
      --><label for="radio4">★</label><!--
      --><input id="radio5" type="radio" name="estrellas" value="1"><!--
      --><label for="radio5">★</label>
    </p>
  </form>


  <div class="container">
    <x-maps-leaflet
        :centerPoint="['lat' => 5.067, 'long' => -75.517]"
        :markers="[['lat' => 5.067, 'long' => -75.517]]"
        :zoomLevel="6"
    ></x-maps-leaflet>
    </div>

<div>
<br>
<br>
<textarea name="comentarios" rows="10" cols="40">Escribe aquí tus comentarios</textarea>
<br>

</div>
</div>
</div>

@endsection


