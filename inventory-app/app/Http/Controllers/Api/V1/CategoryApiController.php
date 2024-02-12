<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    // Mostrar todas las categorías
    public function index()
    {
        $categories = Category::paginate();
        return response()->json($categories);
    }
}
