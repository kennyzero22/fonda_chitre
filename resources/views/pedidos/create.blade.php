@extends('layouts.app')

@section('content')

<h1 class="mt-4">Crear Pedido</h1>
<a class="button button2" href="{{ route('pedidos.index') }}">Regresar</a>
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

<form action="{{ route('pedidos.store') }}" method="post">
    @csrf
    <select name="numerodecliente" id="inputcliente_id" class="form-control mb-3">
        <option value="">-- Selecionar Cliente --</option>
        @foreach ($clientes as $cliente)
            <option value="{{$cliente['numerodecliente'] }}">
            {{$cliente['nombrecliente']}}</option>
        @endforeach
    </select>

    <select name="comida_id" id="inputcomida_id" class="form-control mb-3">
        <option value="">-- Selecionar comida --</option>
        @foreach ($comidas as $comida)
            <option value="{{$comida['numerodecomida'] }}">
            {{$comida['descripcion']}}</option>
        @endforeach
    </select>

    <input type="text" name="direcciondeenvio" class="form-control mb-3" placeholder="Dirección de Envio"/>

    <input type="number" name="cantidad" class="form-control mb-3" placeholder="Cantidad"/>

    <input type="datetime-local" name="fechadepedido" class="form-control mb-3" placeholder="Fecha"/>

    {{-- <textarea class="form-control mb-3" name="descripcion" rows="4" placeholder="Descripción"></textarea> --}}

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
