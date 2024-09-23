<?php

namespace App\Http\Controllers;

use App\Models\salones;
use Illuminate\Http\Request;

class SalonesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['salones']=Salones::paginate(10);

        return view('salones.index',$datos);
    }

    public function welcome()
    {
        $datos['salones'] = Salones::all(); // O usa `paginate(10)` si quieres paginación en la vista welcome
        return view('welcome', $datos);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos=[
            'nombre' => 'required|string|max:100',
           ]; 
           $Mensaje=["required"=>'El :attribute es requerido'];
           $this->validate($request,$campos,$Mensaje);
    
           // $datosSalon=request()->all();
    
            $datosSalon=request()->except("_token");
    
            Salones::insert($datosSalon);
    
            //return response()->json($datosSalon)->with('Mensaje','Salon agregado con exito');
            return redirect('salones')->with('Mensaje','Salon agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(salones $salones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_salon)
    {
        $salon=Salones::findOrFail($id_salon);

        return view('salones.edit', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_salon)
    {
        $datosSalon=request()->except(["_token","_method"]);
        Salones::where('id_salon','=',$id_salon)->update($datosSalon);

        //$salon=Salones::findOrFail($id_salon);
        //return view('salones.edit', compact('salon'));
        
        return redirect()->route('ordenadores.index', ['id_salon' => $id_salon])->with('Mensaje','Salon actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_salon)
    {
        Salones::destroy($id_salon);

        return redirect('salones')->with('Mensaje','Salon eliminado con exito');
    }
}
