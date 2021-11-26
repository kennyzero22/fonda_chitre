@extends('layouts.app')

@section('content')

<style>
    table, th, td {
      /* border: 1px solid black;
      border-collapse: collapse; */
      text-align: center;
    }

    table.center {
      margin-left: auto;
      margin-right: auto;
    }
    </style>

<h1 class="texth1 mt-2">Home</h1>

<table class="container center mt-5">
    <tr>
      <th>Comidas</th>
      <th>Pedidos</th>

    </tr>
    <tr>
      <td>
        <a href="{{ route('comidas.index') }}">
            <img src="https://guarare.municipios.gob.pa/8/comidas-1525884194.jpg"
            title="value 212"
            alt="comidas"
            width="300px" height="300px">
        </a>
      </td>
      <td>
        <a href="{{ route('pedidos.index') }}">
            <img src="https://www.panamaamerica.com.pa/sites/default/files/servicio-delivery.jpg"
            title="value 212"
            alt="comidas"
            width="300px" height="300px">
        </a>
    </td>
    </tr>
  </table>

@endsection
