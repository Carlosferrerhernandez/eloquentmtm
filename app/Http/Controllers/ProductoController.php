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
        //
        $productos = Producto::with('presentaciones')->get();

        /*$productos = Producto::all();*/

        /*dd($productos);*/

        return view('productos.index')->with(['productos'=> $productos]);
    }
}
