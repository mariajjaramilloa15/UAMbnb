@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-dark">
                    <div class="card-header text-center text-dark" style="background-color: #90AAFF ;">
                        <h1>{{ $title }}</h1>
                    </div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @forelse($reports as $report)

                                @include('reports.subview-report')

                                {{-- <a href="{{ url('/properties/'.$report->id) }}">Ver detalles</a> --}}

                            @empty
                                <li class="list-group-item">No hay reportes.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
