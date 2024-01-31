{{-- resources/views/locations/index.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="mt-8 text-2xl">
                    Localizaciones
                </div>

                <div class="mt-6">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Ciudad</th>
                                <th class="px-4 py-2">Nombre del Edificio</th>
                                <th class="px-4 py-2">Dirección del Edificio</th>
                                <th class="px-4 py-2">Número de Sala</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                            <tr class="hover:bg-grey-lighter">
                                <td class="border px-4 py-2">{{ $location->id }}</td>
                                <td class="border px-4 py-2">{{ $location->city }}</td>
                                <td class="border px-4 py-2">{{ $location->building_name }}</td>
                                <td class="border px-4 py-2">{{ $location->building_address }}</td>
                                <td class="border px-4 py-2">{{ $location->room_number }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
