<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ApiProductosController extends Controller
{
    //

    public function index(Request $request)
    {
        //if(!$request->ajax()) return redirect('/');

        $buscar= $request->buscar;
        $criterio= $request->criterio;
     $productos = Producto::all();
    return (( $productos));
            
        
    }






}
