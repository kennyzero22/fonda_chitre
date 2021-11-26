@extends('layouts.app')

@section('content')
{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h1 class="texth1 mt-5">Pedidos</h1>
<a class="button button3 float-end mt-4" href="{{ route('pedidos.create') }}">Crear Pedido</a>



<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numero de Cliente</th>
            <th scope="col">Direccion de Envio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Fechadepedido</th>
            <th scope="col">IDdelivery</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($pedidos as $pedido) {{-- Loop products --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pedido->numerodecliente }}</td>
            <td>{{ $pedido->direcciondeenvio }}</td>
            <td>{{ $pedido->cantidad }}</td>
            <td>{{ $pedido->fechadepedido }}</td>
            {{-- <td>{{ $pedido->iddelivery }}</td> --}}
            <td>{{ $pedido->idpedido }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <a class="dropdown-item" href="{{ route('pedidos.show', $pedido->idpedido) }}">View</a> {{-- View --}}
                        <a class="dropdown-item" href="{{ route('pedidos.edit', $pedido->idpedido) }}">Edit</a> {{-- Edit --}}
                        {{-- <li> --}}
                            <hr class="dropdown-divider">
                        {{-- </li> --}}
                        {{-- <li> --}}
                            <form action="{{ route('pedidos.destroy', $pedido->idpedido) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        {{-- </li> --}}
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection
