<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $datos['empleados']=empleado::paginate(3);   
        return view('Empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       //$datosempleado= request()->all();
       //guuarda los en la variable $datosempleado
       $datosempleado= request()->except('_token');
       if ($request->hasFile('foto')){
        $datosempleado['foto']=$request->file('foto')->store('uploads','public');
       }
       //inserta los datos en la base de datos de la variable datosempleado
       empleado::insert($datosempleado);
       return response()->json($datosempleado);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //muestra el formulario de la vista edit que edita los empleados guardados
        $empleado=empleado::findOrFail($id);
        return view('Empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // se le envia un id para eliminar el elemento escojido 
        empleado::destroy($id);
         return redirect('empleado');
    }
}
