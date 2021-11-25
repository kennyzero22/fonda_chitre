@extends('layouts.app')

@section('content')

<h1>Crear Comida</h1>
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

    <input type="number" name="promocion" class="form-control mb-3" placeholder="Promoción"/>

    <textarea class="form-control mb-3" name="descripcion" rows="4" placeholder="Descripción"></textarea>

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
