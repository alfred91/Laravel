<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        return view('products.create', compact('categories', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'model' => 'required',
            'stock' => 'required|numeric',
            'manufacturer' => 'required',
            'description' => 'required',
            'status' => 'required',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'image' => 'sometimes|file|image|max:5000',
        ]);

        $data = $request->all();

        // Si se sube una imagen, procesar y guardar la ruta de la imagen
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with('category', 'location')->findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product) // Laravel inyecta automáticamente el producto basado en el ID de la ruta
    {
        $categories = Category::all();
        $locations = Location::all();

        return view('products.edit', compact('product', 'categories', 'locations'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'code' => 'required',
            'model' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'stock' => 'required|numeric',
            'status' => 'required',
            'category_id' => 'required|exists:categories,id',
            'location_id' => 'required|exists:locations,id',
            'image' => 'sometimes|file|image|max:5000',
        ]);

        $data = $request->all();

        // Tratar la imagen, si se sube una nueva
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Producto actualizado con éxito');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
