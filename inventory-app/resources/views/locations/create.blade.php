@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-xl font-semibold my-6">Añadir Nueva Localización</h1>

    <form action="{{ route('locations.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</label>
            <input type="text" name="city" id="city" required class="shadow border rounded w-auto py-2 px-3 text-gray-700">
        </div>

        <div class="mb-4">
            <label for="building_name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Edificio:</label>
            <input type="text" name="building_name" id="building_name" required class="shadow border rounded w-auto py-2 px-3 text-gray-700">
        </div>

        <div class="mb-4">
            <label for="building_address" class="block text-gray-700 text-sm font-bold mb-2">Dirección del Edificio:</label>
            <input type="text" name="building_address" id="building_address" required class="shadow border rounded w-auto py-2 px-3 text-gray-700">
        </div>

        <div class="mb-4">
            <label for="room_number" class="block text-gray-700 text-sm font-bold mb-2">Número de Sala:</label>
            <input type="number" name="room_number" id="room_number" min="1" max="999" required class="shadow border rounded w-auto py-2 px-3 text-gray-700">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Añadir
        </button>
    </form>
</div>
@endsection
