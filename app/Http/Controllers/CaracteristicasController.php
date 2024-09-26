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
    public function create($id_ordenador,$id_salon)
    {
        return view('caracteristicas.create', compact('id_ordenador','id_salon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id_salon)
    {
        $campos = [
            'id_ordenador' => 'required|integer',
            'office' => 'required|string|max:100',
            'so' => 'required|string|max:100',
            'serial_cpu' => 'required|string|max:100',
            'serial_monitor' => 'required|string|max:100',
            'serial_teclado' => 'required|string|max:100',
            'serial_mouse' => 'required|string|max:100',
            'serial_disco_duro_mecanico' => 'required|string|max:100',
            'serial_disco_solido' => 'required|string|max:100',
            'camara_web' => 'required|string|max:100',
            'estabilizadores' => 'required|string|max:100',
            'cpu' => 'required|string|max:100',
            'ram' => 'required|string|max:100',
        ]; 

           $Mensaje=["required"=>'El :attribute es requerido'];
           $this->validate($request,$campos,$Mensaje);
    
           $caracteristica= Caracteristicas::create([

            'id_ordenador' => $request->id_ordenador,
            'office' => $request->office,
            'so' => $request->so,
            'serial_cpu' => $request->serial_cpu,
            'serial_monitor' => $request->serial_monitor,
            'serial_teclado' => $request->serial_teclado,
            'serial_mouse' => $request->serial_mouse,
            'serial_disco_duro_mecanico' => $request->serial_disco_duro_mecanico,
            'serial_disco_solido' => $request->serial_disco_solido,
            'camara_web' => $request->camara_web,
            'estabilizadores' => $request->estabilizadores,
            'cpu' => $request->cpu,
            'ram' => $request->ram
            ]);
                    
            return redirect()->route('observaciones.create',['id_ordenador' => $caracteristica->id_ordenador, 'id_salon'=> $id_salon])
                             ->with('Mensaje', 'Caracteristicas agregadas con éxito');
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

        //$caracteristica = Caracteristicas::findOrFail($id_ordenador);
        $caracteristica = Caracteristicas::where('id_ordenador', $id_ordenador)->first();

        if (!$caracteristica) {
            return redirect()->back()->with('error', 'No se encontraron características para este ordenador.');
        }

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
