<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonda de Chitre</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <style>
.texth1 {
  text-align: center;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #008CBA;} /* Blue */

.button3 {background-color: #e60d0d;} /* yellow */

.button4 {background-color: #ff8009;} /* yellow */

.h1style{
    background-color: blue;
    color: white;
    opacity: 0.6;
    margin: 0;
}
th td{
    text-align: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #fd535be3;
}

.classli{
    all: initial;
}
        </style>
</head>

<body>

    <div class="container w-50 mt-5">
        <h1 class="h1style">Fonda Chitre</h1>
        {{-- <nav aria-label="breadcrumb"> --}}
        {{-- <nav aria-label=""> --}}
            <ul>
            {{-- <ol class="breadcrumb"> --}}
            {{-- <ol class=""> --}}
                {{-- <li class="breadcrumb-item"><a href="{{ route('comidas.index') }}">Inicio</a></li> --}}
                <li class="{{ (request()->is('home')) ? 'active' : '' }}"><a href="{{ route('home.index') }}">Inicio</a></li>
                <li class="{{ (request()->is('comidas')) ? 'active' : '' }}"><a href="{{ route('comidas.index') }}">Comidas</a></li>
                <li class="{{ (request()->is('pedidos')) ? 'active' : '' }}"><a href="{{ route('pedidos.index') }}">Pedidos</a></li>
                <li style="float:right" ></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Data</li> --}}
            {{-- </ol> --}}
        </ul>
        {{-- </nav> --}}
        @yield('content')
    </div>
</body>
</html>
