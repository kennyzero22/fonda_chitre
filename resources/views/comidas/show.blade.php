@extends('layouts.app')

@section('content')
    <h1 class="mt-4">Comida Show</h1>
    <a class="button button2" href="{{ route('comidas.index') }}">Regresar</a>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Numero de Comida</h5>
        <p class="fw-bold">{{ $comida->numerodecomida }}</p>

        <h5 class="text-warning">Promoción</h5>
        <p class="fw-bold"> {{ $comida->promocion }}</p>

        <h5 class="text-warning">Descripción</h5>
        <p class="fw-bold">{{ $comida->descripcion }}</p>
    </div>

@endsection
