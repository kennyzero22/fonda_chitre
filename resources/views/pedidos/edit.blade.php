@extends('layouts.app')

@section('content')

<h1 class="mt-4">Actualizar Pedido</h1>

<a class="button button2 mt-3" href="{{ route('pedidos.index') }}">Regresar</a>
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

<form action="{{ route('pedidos.update', $pedido->idpedido) }}" method="post">
    @csrf
    @method('put')

    <select name="numerodecliente" id="inputcliente_id" class="form-control mb-3">
        <option value="">-- Selecionar Cliente --</option>
        @foreach ($clientes as $cliente)
            <option value="{{$cliente['numerodecliente'] }}">
            {{$cliente['nombrecliente']}}</option>
        @endforeach
    </select>
    {{-- <input type="text" name="numerodecomida" class="form-control mb-3" placeholder="Numero de Comida" value="{{ $comida->numerodecomida }}"/> --}}

    <input type="text" name="direcciondeenvio" class="form-control mb-3" placeholder="Dirección" value="{{ $pedido->direcciondeenvio }}"/>

    <input type="number" name="cantidad" class="form-control mb-3" placeholder="Cantidad" value="{{ $pedido->cantidad }}"/>

    <input type="datetime-local" name="fechadepedido" class="form-control mb-3" placeholder="Fecha" value="{{ $pedido->fechadepedido }}"/>
    {{-- <textarea class="form-control mb-3" name="descripcion" rows="4" placeholder="Descripción">{{ $pedido->descripcion }}</textarea> --}}

    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
