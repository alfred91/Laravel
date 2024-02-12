<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationApiController extends Controller
{
    // Mostrar Localizaciones
    public function index()
    {
        $locations = Location::paginate();
        return response()->json($locations);
    }
}
