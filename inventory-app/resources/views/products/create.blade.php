{{-- resources/views/products/edit.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-xl font-semibold my-6">Crear Producto</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="mb-4">
            <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Código:</label>
            <input type="text" name="code" id="code" class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">Categoría:</label>
            <select name="category_id" id="category_id" class="shadow border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Seleccione una categoría</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="location_id" class="block text-gray-700 text-sm font-bold mb-2">Localización:</label>
            <select name="location_id" id="location_id" class="shadow border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Seleccione una localización</option>
                @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->city }}, {{ $location->name_building }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="model" class="block text-gray-700 text-sm font-bold mb-2">Modelo:</label>
            <input type="text" name="model" id="model" class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="manufacturer" class="block text-gray-700 text-sm font-bold mb-2">Fabricante:</label>
            <input type="text" name="manufacturer" id="manufacturer" class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Imagen del Producto:</label>
            <input type="file" name="image" id="image" class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
            <input type="number" name="stock" id="stock" class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
            <select name="status" id="status" class="shadow border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="active">Activo</option>
                <option value="broken">Roto</option>
                <option value="missing">Desaparecido</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Añadir Producto
        </button>
    </form>
</div>
@endsection
