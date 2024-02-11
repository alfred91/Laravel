<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    // Mostrar todos los productos con paginación
    public function index()
    {
        $products = Product::with(['category', 'location'])->paginate();
        return response()->json($products);
    }

    // Mostrar un producto por su código
    public function show($id)
    {
        $product = Product::with(['category', 'location'])->findOrFail($id);
        return response()->json($product);
    }

    // Crear un nuevo producto
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|unique:products,code|max:255',
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
        ]);

        $product = Product::create($validatedData);
        return response()->json($product, 201);
    }


    // Actualizar un producto existente
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);
    }

    // Eliminar un producto
    public function destroy($code)
    {
        $product = Product::where('code', $code)->first();

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Producto eliminado'], 204);
    }
}
