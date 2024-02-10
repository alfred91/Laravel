<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::paginate(10);
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required',
            'building_name' => 'required',
            'building_address' => 'required',
            'room_number' => 'required'

        ]);
        Location::create($request->all());
        return redirect()->route('locations.index')->with('success', 'Localización creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);
        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'city' => 'required',
            'building_name' => 'required',
            'building_address' => 'required',
            'room_number' => 'required'
        ]);
        $location->update($request->all());
        return redirect()->route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('locations.index')->with('success', 'Localización eliminada con éxito.');
    }
}
