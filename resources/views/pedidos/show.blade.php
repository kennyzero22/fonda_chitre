@extends('layouts.app')

@section('content')
    <h1 class="mt-4">Pedidos Show</h1>
    <a class="button button2 mt-3" href="{{ route('pedidos.index') }}">Regresar</a>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">ID Pedido</h5>
        <p class="fw-bold">{{ $pedido->idpedido }}</p>

        <h5 class="text-warning">Nombre Cliente</h5>
         @foreach ($clientes as $cliente)
            @if($cliente->numerodecliente==$pedido->numerodecliente)
            <p class="fw-bold"> {{$cliente->nombrecliente}} </p>
            @endif
        @endforeach


        <h5 class="text-warning">Dirección de Envio</h5>
        <p class="fw-bold">{{ $pedido->direcciondeenvio }} </p>

        <h5 class="text-warning">Cantidad</h5>
        <p class="fw-bold">{{ $pedido->cantidad }}</p>

        <h5 class="text-warning">Fecha de Pedido</h5>
        <p class="fw-bold">{{ $pedido->fechadepedido }}</p>
    </div>

@endsection
