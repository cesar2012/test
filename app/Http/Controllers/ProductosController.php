<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Producto;


class ProductosController extends Controller
{


    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $productos	=	Producto::all();
        return Response::view('producto', array('productos'	=>	$productos));
    }
}
