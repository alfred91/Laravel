{{-- resources/views/products/edit.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-xl font-semibold my-6">Editar Producto</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Código:</label>
            <input type="text" name="code" id="code" value="{{ $product->code }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="model" class="block text-gray-700 text-sm font-bold mb-2">Modelo:</label>
            <input type="text" name="model" id="model" value="{{ $product->model }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="manufacturer" class="block text-gray-700 text-sm font-bold mb-2">Fabricante:</label>
            <input type="text" name="manufacturer" id="manufacturer" value="{{ $product->manufacturer }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $product->description }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Imagen del Producto:</label>
            <input type="file" name="image" id="image" class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Imagen actual" class="w-20 h-20 object-cover mt-2">
            @endif
        </div>

        <div class="mb-4">
            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
            <input type="number" name="stock" id="stock" value="{{ $product->stock }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
            <select name="status" id="status" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Activo</option>
                <option value="broken" {{ $product->status == 'broken' ? 'selected' : '' }}>Roto</option>
                <option value="missing" {{ $product->status == 'missing' ? 'selected' : '' }}>Desaparecido</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Actualizar Producto
        </button>
    </form>
</div>
@endsection
