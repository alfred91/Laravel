<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Torneo;
use Carbon\Carbon;

class TorneoController extends Controller
{
    public function index(): View
    {
        $torneos = Torneo::whereDate('fechaInicio', '>', now()->toDateString())->paginate(5);
        return view('dashboard', ['torneos' => $torneos]);
    }

    public function create()
    {
        return view('torneos.create');
    }

    public function store(Request $request)
    {
        $torneo = new Torneo();
        $torneo->nombre = $request->nombre;
        $torneo->juego = $request->juego;
        $torneo->fechaInicio = $request->fechaInicio;
        $torneo->premio1 = $request->premio1;
        $torneo->premio2 = $request->premio2;
        $torneo->maxParticipantes = $request->maxParticipantes;
        $torneo->save();

        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        echo $id;
    }
}
