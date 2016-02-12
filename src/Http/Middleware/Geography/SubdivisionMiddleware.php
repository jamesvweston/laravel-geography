<?php
namespace app\Http\Middleware\Geography;


use Closure;
use Illuminate\Http\Request;

class SubdivisionMiddleware {

    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle (Request $request, Closure $next)
    {
        return $next($request);
    }

}