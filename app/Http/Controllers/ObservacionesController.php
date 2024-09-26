<?php

namespace App\Http\Controllers;

use App\Models\Observaciones;
use Illuminate\Http\Request;

class ObservacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_ordenador)
    {
        $observaciones = Observaciones::where('id_ordenador', $id_ordenador)->get();

        return response()->json($observaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id_ordenador,$id_salon)
    {
        return view ('observaciones.create', compact('id_ordenador','id_salon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id_salon)
    {
        $campos = [
            'id_ordenador' => 'required|integer',
            'fecha' => 'required|date',
            'observacion' => 'required|string',
            
        ]; 

           $Mensaje=["required"=>'El :attribute es requerido'];
           $this->validate($request,$campos,$Mensaje);
    
           $observacion= Observaciones::create([

            'id_ordenador' => $request->id_ordenador,
            'fecha' => $request->fecha,
            'observacion' => $request->observacion,
            ]);
                    
            return redirect()->route('ordenadores.index',['id_salon' => $id_salon])
                             ->with('Mensaje', 'Observaciones agregadas con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Observaciones $observaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_ordenador)
    {
       // $observacion = Observaciones::findOrFail($id_ordenador);
       $observacion= Observaciones::where('id_ordenador', $id_ordenador)->first();

        if (!$observacion) {
            return redirect()->back()->with('error', 'No se encontraron observaciones para este ordenador.');
        }

        return view('observaciones.edit', compact('observacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_ordenador)
    {
        $observacion = $request->except(['_token', '_method']);
        Observaciones::where('id_ordenador', $id_ordenador)->update($observacion);

        // Redirigir a la vista de edición de características
        return redirect()->route('salones')->with('Mensaje','Datos actualizados con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Observaciones $observaciones)
    {
        //
    }
}
