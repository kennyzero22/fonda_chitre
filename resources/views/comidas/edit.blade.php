@extends('layouts.app')

@section('content')

<h1>Actualizar Comida</h1>
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

<form action="{{ route('comidas.update', $comida->idcomida) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="numerodecomida" class="form-control mb-3" placeholder="Numero de Comida" value="{{ $comida->numerodecomida }}"/>

    <input type="text" name="promocion" class="form-control mb-3" placeholder="Promoción" value="{{ $comida->promocion }}"/>

    <textarea class="form-control mb-3" name="descripcion" rows="4" placeholder="Descripción">{{ $comida->descripcion }}</textarea>

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
