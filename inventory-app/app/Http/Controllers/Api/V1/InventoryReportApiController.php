<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryReportApiController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['category', 'location'])
            ->when($request->category, function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->category . '%');
                });
            })
            ->when($request->name, function ($query) use ($request) {
                $query->where('model', 'like', '%' . $request->name . '%');
            })
            ->when($request->code, function ($query) use ($request) {
                $query->where('code', 'like', '%' . $request->code . '%');
            })
            ->paginate();

        return response()->json($products);
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }
}
