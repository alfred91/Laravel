@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="mt-8 text-2xl flex justify-between items-center">
                    <span><b>Reporte de Inventario</b></span>
                    <a href="{{ route('reports.inventory.pdf') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Generar PDF</a>
                </div>

                <div class="mt-4 mb-4">
                    <form action="{{ route('reports.inventory') }}" method="GET" class="flex space-x-2">
                        <input type="text" name="categoria" placeholder="Categoría" value="{{ request('categoria') }}" class="rounded p-2">
                        <input type="text" name="nombre" placeholder="Nombre" value="{{ request('nombre') }}" class="rounded p-2">
                        <input type="text" name="codigo" placeholder="Código" value="{{ request('codigo') }}" class="rounded p-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
                    </form>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto">
                        <thead class="bg-gray-800">
                            <tr>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">ID</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Código</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Modelo</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Fabricante</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Descripción</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Imagen</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Stock</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Estado</span>
                                </th>
                                <th class="px-4 py-2">
                                    <span class="text-gray-300">Localización</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-4 px-6">{{ $product->id }}</td>
                                <td class="py-4 px-6">{{ $product->category->name ?? 'Sin categoría' }}</td>
                                <td class="py-4 px-6">{{ $product->model }}</td>
                                <td class="py-4 px-6">{{ $product->manufacturer }}</td>
                                <td class="py-4 px-6">{{ $product->description }}</td>
                                <td class="py-4 px-6">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Producto" class="w-20 h-20 object-cover">
                                </td>
                                <td class="py-4 px-6">{{ $product->stock }}</td>
                                <td class="py-4 px-6">{{ $product->status }}</td>
                                <td class="py-4 px-6">{{ $product->location->city ?? 'N/A' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if (!request()->has('pdf'))
                <div class="mt-4">
                    {{ $products->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
