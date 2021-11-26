@extends('layouts.app')

@section('content')

<h1 class="mt-4">Crear Comida</h1>
<a class="button button2" href="{{ route('comidas.index') }}">Regresar</a>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('comidas.store') }}" method="post">
    @csrf
    <input type="text" name="numerodecomida" class="form-control mb-3" placeholder="Numero de Comida"/>

    <input type="text" name="promocion" class="form-control mb-3" placeholder="Promoción"/>

    <textarea class="form-control mb-3" name="descripcion" rows="4" placeholder="Descripción"></textarea>

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
