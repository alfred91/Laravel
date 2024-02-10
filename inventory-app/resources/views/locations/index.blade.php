@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="mt-8 text-2xl flex justify-between items-center">
                    <span><b>Localizaciones</b></span>
                    <a href="{{ route('locations.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Añadir Localización</a>
                </div>

                <div class="mt-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th class="px-4 py-2">
                                        <span class="text-gray-300">ID</span>
                                    </th>
                                    <th class="px-4 py-2">
                                        <span class="text-gray-300">Ciudad</span>
                                    </th>
                                    <th class="px-4 py-2">
                                        <span class="text-gray-300">Nombre del Edificio</span>
                                    </th>
                                    <th class="px-4 py-2">
                                        <span class="text-gray-300">Dirección del Edificio</span>
                                    </th>
                                    <th class="px-4 py-2">
                                        <span class="text-gray-300">Número de Sala</span>
                                    </th>
                                    <th class="px-4 py-2">
                                        <span class="text-gray-300">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locations as $location)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-4 px-6">{{ $location->id }}</td>
                                    <td class="py-4 px-6">{{ $location->city }}</td>
                                    <td class="py-4 px-6">{{ $location->building_name }}</td>
                                    <td class="py-4 px-6">{{ $location->building_address }}</td>
                                    <td class="py-4 px-6">{{ $location->room_number }}</td>
                                    <td class="py-4 px-6 flex justify-center items-center space-x-2">
                                        <form action="{{ route('locations.destroy', $location) }}" method="POST" onsubmit="return confirm('¿Estás seguro de querer eliminar esta localización?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-trash-alt fa-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
