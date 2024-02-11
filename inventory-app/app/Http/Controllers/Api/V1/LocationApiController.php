<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationApiController extends Controller
{
    // Mostrar todas las localizaciones con paginación
    public function index()
    {
        $locations = Location::paginate();
        return response()->json($locations);
    }

    // Crear una nueva localización
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'city' => 'required|string|max:255',
            'building_name' => 'required|string|max:255',
            'building_address' => 'required|string|max:255',
            'room_number' => 'required|string|max:255',
        ]);

        $location = Location::create($validatedData);
        return response()->json($location, 201);
    }

    // Actualizar una localización existente
    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $validatedData = $request->validate([
            'city' => 'required|string|max:255',
            'building_name' => 'required|string|max:255',
            'building_address' => 'required|string|max:255',
            'room_number' => 'required|string|max:255',
        ]);

        $location->update($validatedData);
        return response()->json($location);
    }

    // Eliminar una localización
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return response()->json(null, 204);
    }
}
