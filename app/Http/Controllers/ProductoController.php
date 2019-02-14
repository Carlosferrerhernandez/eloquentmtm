<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentacion;

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

        $presentaciones = Presentacion::with('productos')->get();


        /*dd($presentaciones);*/

        return view('productos.index')->with(['presentaciones'=> $presentaciones]);
    }
}
