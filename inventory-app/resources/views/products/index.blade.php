@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                <div class="mt-8 text-2xl flex justify-between items-center">
                    <span><b>Productos</b></span>
                    <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Añadir Producto</a>
                </div>

                <div class="mt-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead class="justify-between">
                                <tr class="bg-gray-800">
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
                                    <th class="px-4 py-2">
                                        <span class="text-gray-300">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-4 px-6">{{ $product->id }}</td>
                                    <td class="py-4 px-6">{{ $product->code }}</td>
                                    <td class="py-4 px-6">{{ $product->model }}</td>
                                    <td class="py-4 px-6">{{ $product->manufacturer }}</td>
                                    <td class="py-4 px-6">{{ $product->description }}</td>
                                    <td class="py-4 px-6">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="Producto" class="w-20 h-20 object-cover">
                                    </td>
                                    <td class="py-4 px-6">{{ $product->stock }}</td>
                                    <td class="py-4 px-6">{{ $product->status }}</td>
                                    <td class="py-4 px-6">{{ $product->location->city ?? 'N/A' }}</td>
                                    <td class="py-4 px-6 flex justify-center items-center space-x-2">
                                        <a href="{{ route('products.edit', $product) }}" class="text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-edit fa-lg"></i> <!-- Aumentar tamaño -->
                                        </a>
                                        <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('¿Estás seguro de querer eliminar este producto?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-trash-alt fa-lg"></i> <!-- Aumentar tamaño -->
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
