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
            ->when($request->categoria, function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->categoria . '%');
                });
            })
            ->when($request->nombre, function ($query) use ($request) {
                $query->where('model', 'like', '%' . $request->nombre . '%');
            })
            ->when($request->codigo, function ($query) use ($request) {
                $query->where('code', 'like', '%' . $request->codigo . '%');
            })
            ->paginate(10);

        return response()->json($products);
    }
}
