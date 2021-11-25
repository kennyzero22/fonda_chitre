<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comidas = Comida::latest()->get();
        return view('comidas.index', compact('comidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comidas.create');
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
            'numerodecomida' => 'required',
            'promocion' => 'required',
            'descripcion' => 'required'
        ]);

        Comida::create($data);

        return redirect()->route('comidas.index')->with('success', 'comida fue agregada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comida $comida)
    {
        return view('comidas.show', ['comida' => $comida]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comida $comida)
    {
        return view('comidas.edit', compact('comida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comida $comida)
    {
        $request->validate([
            'numerodecomida' => 'required',
            'promocion' => 'required',
            'descripcion' => 'required'
        ]);
        $comida->numerodecomida = $request->numerodecomida;
        $comida->promocion = $request->promocion;
        $comida->descripcion = $request->descripcion;
        $comida->save();
        return redirect()->route('comidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comida $comida)
    {
        $comida->delete();
        return back();
    }
}
