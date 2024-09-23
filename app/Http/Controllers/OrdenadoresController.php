<?php

namespace App\Http\Controllers;

use App\Models\Ordenadores;
use Illuminate\Http\Request;

class OrdenadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_salon)
    {
        $ordenadores = Ordenadores::where('id_salon', $id_salon)->paginate(12);
        
        return view('ordenadores.index', ['ordenadores' => $ordenadores, 'id_salon' => $id_salon]);
    }

    public function ListOrdenadores($id_salon)
    {
        $ordenadores = Ordenadores::where('id_salon', $id_salon)->orderBy('numero_en_salon')->get();
        
        return view('ListOrdenadores', ['ordenadores' => $ordenadores, 'id_salon' => $id_salon]);
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
    public function show(Ordenadores $ordenadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_ordenador)
    {
        $ordenador = Ordenadores::findOrFail($id_ordenador);

        return view('ordenadores.edit', compact('ordenador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_ordenador)
    {
        $datosOrdenador = $request->except(['_token', '_method']);
        Ordenadores::where('id_ordenador', $id_ordenador)->update($datosOrdenador);

        // Redirigir a la vista de edición de características
        return redirect()->route('caracteristicas.edit', ['id_ordenador' => $id_ordenador])
                         ->with('Mensaje', 'Ordenador actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id_ordenador)
    {
        // Eliminar el ordenador
    $ordenador = Ordenadores::find($id_ordenador);
    
    if ($ordenador) {
        $id_salon = $request->input('id_salon'); // Obtener el id_salon desde la solicitud
        $ordenador->delete();
        return redirect()->to('/ordenadores/index/' . $id_salon)->with('Mensaje', 'Ordenador eliminado con éxito');
    } else {
        return redirect()->back()->with('Error', 'Ordenador no encontrado');
    }
    }
}