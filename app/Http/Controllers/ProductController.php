<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productosHombre = Producto::where('categoria', 'hombre')->get();
        $productosMujer = Producto::where('categoria', 'mujer')->get();
        $productosHot = Producto::where('categoria', 'hot')->get();

        return view('productos.index', compact('productosHombre', 'productosMujer', 'productosHot'));
    }
}
