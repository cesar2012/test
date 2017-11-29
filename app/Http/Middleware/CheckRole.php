<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        
        //Se podría validar por grupos de roles con arreglos

        $agrega_o_quita = substr($role, 0,1);
        $contenido = substr($role, 1);
       // Log::info('Pasando por aqui ' . $agrega_o_quita .   $contenido );


        if ($agrega_o_quita == "-") { // quita a rol específcio el acceso a la ruta

            if ( $request->user()->role == "$contenido" ) {  // aquí se podría colocar un arreglo
                return Response::view('denegado');

            }  else{
                return $next($request);
            }        
        }


        if ($agrega_o_quita == "s") { // quita a todos menos al rol. sólo el rol

            if ( $request->user()->role == "$contenido" ) {  // aquí se podría colocar un arreglo
                return $next($request);            
            } else {
                return Response::view('denegado');
            }         
        }
   	
       
    }
}


// Está en modalidad permisivo. Por defecto todos los roles se permiten. Luego se quitan accesos a algunos
// - para quitar
// s sólo el rol. Es para quitar a todos el acceso menos al rol
