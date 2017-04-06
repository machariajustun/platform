<?php

/**
 * Middleware to handle REST requests
 */

namespace Ushahidi\App\Http\Middleware;

use Closure;

class RESTMiddleware
{
    public function handle($request, \Closure $next, $resource)
    {
        return $next($request);
    }
}
