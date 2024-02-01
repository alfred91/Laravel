<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Torneo;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TorneoController extends Controller
{
    public function index(): View
    {
        $torneos = Torneo::whereDate('fechaInicio', '>', now()->toDateString())->paginate(5);
        return view('dashboard', ['torneos' => $torneos]);
    }

    public function index_web(): View
    {
        $torneos = Torneo::whereDate('fechaInicio', '>', now()->toDateString())->orderByDesc('fechaInicio')->paginate(10);
        return view('web.torneos', ['torneos' => $torneos]);
    }
    public function create()
    {
        $juegos = Juego::all();
        return view('torneos.create', ["juegos" => $juegos]);
    }

    public function store(Request $request)
    {
        $torneo = new Torneo();
        $torneo->nombre = $request->nombre;
        $torneo->juego_id = $request->juego;
        $torneo->fechaInicio = $request->fechaInicio;
        $torneo->premio1 = $request->premio1;
        $torneo->premio2 = $request->premio2;
        $torneo->maxParticipantes = $request->maxParticipantes;
        $torneo->save();

        //SUBIR IMAGEN
        $id = $torneo->id;
        $request->file('imagen')->storeAs(
            'public',
            'torneo_' . $id . '.jpg'
        );

        return redirect()->route('dashboard');
    }

    public function show($id)
    {
        $torneo = Torneo::find($id);
        return view('web.torneo_detalle', ['torneo' => $torneo]);
    }
    public function inscribirse($torneoId)
    {
        $user = Auth::user();
        $torneo = Torneo::find($torneoId);

        //Comprobamos que no esté ya inscrito
        if (!$torneo->inscritos()->where('user_id', $user->id)->exists()) {
            $torneo->inscritos()->attach($user->id, ['nivel' => 5]);
        } //Si no, no hacemos nada

        return redirect()->route('web.torneos_detalle', ['id' => $torneoId]);
    }
}
