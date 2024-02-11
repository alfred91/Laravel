<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    // Mostrar todas las categorías con paginación
    public function index()
    {
        $categories = Category::paginate();
        return response()->json($categories);
    }

    // Crear una nueva categoría
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create($validatedData);
        return response()->json($category, 201);
    }

    // Actualizar una categoría existente
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validatedData);
        return response()->json($category);
    }

    // Eliminar una categoría
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(null, 204);
    }
}
