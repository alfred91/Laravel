@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                <div class="mt-8 text-2xl flex justify-between items-center">
                    <span>Productos</span>
                    <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Añadir Producto</a>
                </div>

                <div class="mt-6">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Código</th>
                                <th class="px-4 py-2">Modelo</th>
                                <th class="px-4 py-2">Fabricante</th>
                                <th class="px-4 py-2">Descripción</th>
                                <th class="px-4 py-2">Imagen</th>
                                <th class="px-4 py-2">Stock</th>
                                <th class="px-4 py-2">Estado</th>
                                <th class="px-4 py-2">Localización</th>
                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->id }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->code }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->model }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->manufacturer }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->description }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover">
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->stock }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->status }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $product->location->city ?? 'N/A' }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <a href="{{ route('products.edit', $product) }}" class="text-blue-500 pr-4">Editar</a>
                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Eliminar</button>
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
@endsection
