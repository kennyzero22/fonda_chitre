@extends('layouts.app')

@section('content')
<h1>Fonda Chitre</h1>
<a class="btn btn-link float-end" href="{{ route('comidas.create') }}">Create Product</a>

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">N° Comida</th>
            <th scope="col">Service Delivery</th>
            <th scope="col">Promoción</th>
            <th scope="col">Descripción</th>
            <th scope="col">ID Delivery</th>
            <th scope="col">ID Comida</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($comidas as $comida) {{-- Loop products --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $comida->numerodecomida }}</td>
            <td>{{ $comida->serviciodelivery }}</td>
            <td>{{ $comida->promocion }}</td>
            <td>{{ $comida->descripcion }}</td>
            <td>{{ $comida->iddelivery }}</td>
            <td>{{ $comida->idcomida }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('comidas.show', $comida->idcomida) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('comidas.edit', $comida->idcomida) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('comidas.destroy', $comida->idcomida) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection
