<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    // Mostrar Productos
    public function index()
    {
        $products = Product::with(['category', 'location'])->paginate();
        return response()->json($products);
    }

    // Mostrar por código
    public function show($code)
    {
        $product = Product::with(['category', 'location'])->where('code', $code)->first();

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($product, 201);
    }

    // Mostrar por categoría
    public function byCategory($category)
    {
        $products = Product::with(['category', 'location'])->whereHas('category', function ($query) use ($category) {
            $query->where('name', $category);
        })->paginate();

        return response()->json($products);
    }

    // Crear Producto
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|unique:products,code|max:255',
            'model' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'status' => 'required|string',
            'location_id' => 'required|exists:locations,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::create($validatedData);
        return response()->json($product, 201);
    }

    // Eliminar Producto
    public function destroy($code)
    {
        $product = Product::where('code', $code)->first();

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Producto eliminado'], 200);
    }
}
