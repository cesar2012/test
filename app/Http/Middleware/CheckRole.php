<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;

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
    public function handle($request, Closure $next)
    {
        
    Log::info('Pasando por aqui ');

        if ( $request->user()->role == "standar") {
         return redirect('/'); //Debería ser una página llamada accedo denegado
        }    	
        return $next($request);
    }
}
