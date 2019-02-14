<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /*
        *   Consulta de presentaciones de un producto
        */

        $productos = Producto::with('presentaciones')->get();

        /*dd($productos);*/

        return view('productos.index')->with(['productos'=> $productos]);
    }
}
