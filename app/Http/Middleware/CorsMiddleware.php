<?php
/**
 * Created by PhpStorm.
 * User: manuelbruna
 * Date: 4/3/17
 * Time: 19:57
 */

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
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
        $response = $next($request);

        $response->header('Access-Control-Allow-Origin','*');

        return $response;
    }
}