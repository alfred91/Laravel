{{-- resources/views/categories/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-xl font-semibold my-6">Añadir Nueva Categoría</h1>

    <form action="{{ route('categories.store') }}" method="POST" class="max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <input type="text" name="name" id="name" class="form-input mt-1 block w-auto rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">
            Crear Categoría
        </button>
    </form>
</div>
@endsection
