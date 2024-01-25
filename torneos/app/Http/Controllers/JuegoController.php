<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos = Juego::paginate(5);
        return view('juegos', ['juegos' => $juegos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('juegos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:30|unique:juegos',
            'edadR' => 'required|digits_between:1,2',
        ]);

        $juego = new Juego();
        $juego->nombre = $request->nombre;
        $juego->plataforma = $request->plataforma;
        $juego->edadR = $request->edadR;
        $juego->nota = $request->nota;
        $juego->save();

        return redirect()->route('juegos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Juego $juego)
    {
        echo $juego;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juego $juego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juego $juego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juego $juego)
    {
        //
    }
}
