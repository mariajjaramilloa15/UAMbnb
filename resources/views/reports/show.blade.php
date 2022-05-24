@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark">
                {{-- @foreach ($reports as $report) --}}
                    <div class="card mb-3">
                        <div class="card-header text-center text-dark" style="background-color: #90AAFF;">
                            <h1><i class="fa-regular fa-address-card"></i> Reporte</h1>
                        </div>
                    </div>
                    @include('layouts.subview-form-errors')
                    <div class="d-flex justify-content-center">
                        <div class="card mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="" style=''>

                                        <h5 class="card-title">
                                            <i class="fa-solid fa-clipboard"></i>
                                            {{-- <b>{{ $report->name }}</b> --}}
                                            {{-- {{ $category->name }} --}}
                                        </h5>
                                    
                                    <h6><b>Noches: </b>{{ $report->nights }}</h6>
                                    <h6><b>Huéspedes: </b>{{ $report->lodgers }}</h6>
                                    <h6><b>Valor Alquiler: </b>{{ $report->rental_cost }}</h6>
                                    <h6><b>Costo Limpieza: </b>{{ $report->cleaning_cost }}</h6>
                                    <h6><b>Costo Servicio: </b>{{ $report->service_cost }}</h6>
                                </div>
                                @auth
                                <div class="d-flex justify-content-between">
                                    @if (Auth::user()->role === "Admin")
                                        <div class="" style=''>
                                            <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa-solid fa-pen-to-square" title="Editar Inmueble"></i>
                                            </a>
                                        </div>
                                        &nbsp;
                                        <div>
                                            {!! Form::open(['route' => ['reports.destroy', $report->id], 'method' => 'delete']) !!}
                                                {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                                                    'type' => 'submit',
                                                    'title' => "Remover Inmueble",
                                                    'class' => 'btn btn-danger btn-sm',
                                                    'onclick' => 'return confirm("¿Está seguro de remover este inmueble?\n\nTenga en cuenta que esta acción no se puede deshacer.")'
                                                ]) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    @endif
                                    {{-- <a href="http://www.google.com" onclick="return confirm('¿Está seguro?');">Google</a> --}}
                                </div>
                                @endauth
                            </div>
                            <div class="row mt-4">
                                <div class="col s6" >
                                    <h6 class="card-subtitle my-2 text-muted"> {{ $report->created_at }}</h6>
                                </div>
                                {{-- <div class="col s6" style='text-align:right'>
                                    <h6 class="card-subtitle my-2 text-muted">{{ $report->category_id }} </h6>
                                </div> --}}
                            </div>
                        </div>

                        @if ($comprobacion != 0)
                            <div class="card mb-3">
                                {!! Form::open(['route' => 'bills.store', 'method' => 'post']) !!}
                                    <div class="card-body">
                                        {!! Form::radio('status', 'Pago', false) !!}
                                        <label for="status" class="form-label">Pago automático:</label>
                                        <br>
                                        {!! Form::radio('status', 'Pendiente', false) !!}
                                        <label for="status" class="form-label">Dejar pendiente el pago:</label>

                                        {!! Form::hidden('report_id', $report->id) !!}
                                        {!! Form::hidden('start_date', $start_date) !!}
                                        {!! Form::hidden('final_date', $final_date) !!}
                                        {!! Form::hidden('total_price', $sumaTotal) !!}
                                        {{-- <input type='hidden' value='{{ $property->id }}' name='property_id'> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Apartar Inmueble</button>
                                {!! Form::close() !!}
                            </div>
                        @endif
                    </div>
                    @if ($comprobacion == 0)
                        <div class="d-flex justify-content-center">
                            <div class="alert alert-danger">
                                <h6>En estas fechas no está disponible el inmueble</h6>
                            </div>
                        </div>
                    @endif
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</div>
@endsection
