<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleado = Empleado::all();

        return view('empleados', ['empleados' => $empleado]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form_empleado_create', ['titulo' => 'Crear nuevo empleado']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->email = $request->email;
        $empleado->dni = $request->dni;
        $empleado->telefono = $request->telefono;
        $empleado->salario = $request->salario;
        $empleado->save();

        return redirect()->route('empleados.index');

    }

    /**
     * Display the specified resource.
     */

    public function show(Empleado $empleado)
    {
        $empleado_completo = Empleado::where('id', $empleado->id)->first();
        return view('detalle_empleado', ['titulo' => 'Detalle del empleado', 'empleado' => $empleado_completo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        $empleado_completo = Empleado::where('id', $empleado->id)->first();
        return view('form_empleado_update', ['titulo' => 'Modificar empleado','empleado' => $empleado_completo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado_completo = Empleado::where('id', $empleado->id)->first();
        $empleado_completo->nombre = $request->nombre;
        $empleado_completo->email = $request->email;
        $empleado_completo->dni = $request->dni;
        $empleado_completo->telefono = $request->telefono;
        $empleado_completo->salario = $request->salario;
        $empleado_completo->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        Empleado::destroy($empleado);
        return redirect()->route('empleados.index');    }
}
