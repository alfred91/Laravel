<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TorneoController extends Controller
{
    public function index(): View 
    {
            $torneos = Torneo::where('fechaIncio', '>', Carbon::now()->toDateString())->paginate(5);

            return view('dashboard', ['torneos' => $torneos]);
    }
}