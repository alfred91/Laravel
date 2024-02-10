<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class ReportController extends Controller
{
    public function reporteInventario(Request $request)
    {
        $products = Product::with('category', 'location')
            ->when($request->categoria, function ($query) use ($request) {
                return $query->whereHas('category', function ($q) use ($request) {
                    $q->where('name', 'like', '%' . $request->categoria . '%');
                });
            })
            ->when($request->nombre, function ($query) use ($request) {
                return $query->where('model', 'like', '%' . $request->nombre . '%'); // Asumiendo que 'nombre' se refiere a 'model'
            })
            ->when($request->codigo, function ($query) use ($request) {
                return $query->where('code', 'like', '%' . $request->codigo . '%');
            })
            ->paginate(10);

        return view('reports.inventory', compact('products')); // Ajusta la vista y la variable a 'products'
    }

    public function reporteInventarioPdf()
    {
        $products = Product::with('category', 'location')->get(); // Ajusta para usar 'products'

        $pdf = PDF::loadView('reports.inventory', compact('products')); // Asegúrate de que la vista está correcta
        return $pdf->download('reporte_inventario.pdf');
    }
}
