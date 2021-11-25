@extends('layouts.app')

@section('content')
    <h1>Products Show</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Name</h5>
        <p class="fw-bold">{{ $comida->numerodecomida }}</p>

        <h5 class="text-warning">Price</h5>
        <p class="fw-bold">$ {{ $comida->promocion }}</p>

        <h5 class="text-warning">Description</h5>
        <p class="fw-bold">{{ $comida->descripcion }}</p>
    </div>

@endsection
