<?php

namespace App\Http\Controllers;

use App\Models\Caracteristicas;
use Illuminate\Http\Request;

class CaracteristicasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_ordenador)
    {
        $caracteristicas = Caracteristicas::where('id_ordenador', $id_ordenador)->get();

        return response()->json($caracteristicas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Caracteristicas $caracteristicas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_ordenador)
    {
        $caracteristica = Caracteristicas::findOrFail($id_ordenador);

        return view('caracteristicas.edit', compact('caracteristica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_ordenador)
    {
        $caracteristica = $request->except(['_token', '_method']);
        Caracteristicas::where('id_ordenador', $id_ordenador)->update($caracteristica);

        // Redirigir a la vista de edición de características
        return redirect()->route('observaciones.edit', ['id_ordenador' => $id_ordenador])
                         ->with('Mensaje', 'Características actualizadas con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caracteristicas $caracteristicas)
    {
        //
    }
}
