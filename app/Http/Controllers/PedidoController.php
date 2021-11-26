<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Comida;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::latest()->get();
        $clientes = Cliente::latest()->get();
        return view('pedidos.index', compact('pedidos','clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comidas = Comida::all();
        $clientes = Cliente::all();
        return view('pedidos.create', compact('clientes','comidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'numerodecliente' => 'required',
            'direcciondeenvio' => 'required',
            'cantidad' => 'required',
            'fechadepedido' => 'required'
            // 'iddelivery' => 'required'
        ]);

        Pedido::create($data);

        return redirect()->route('pedidos.index')->with('success', 'Pedido Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        $clientes = Cliente::all();
        return view('pedidos.show', ['pedido' => $pedido], compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        $clientes = Cliente::all();
        return view('pedidos.edit', compact('pedido','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'numerodecliente' => 'required',
            'direcciondeenvio' => 'required',
            'cantidad' => 'required',
            'fechadepedido' => 'required',
            // 'iddelivery' => 'required'
        ]);

        $pedido->numerodecliente = $request->numerodecliente;
        $pedido->direcciondeenvio = $request->direcciondeenvio;
        $pedido->cantidad = $request->cantidad;
        $pedido->fechadepedido = $request->fechadepedido;
        $pedido->iddelivery = $request->iddelivery;
        $pedido->save();
        return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return back();
    }
}
