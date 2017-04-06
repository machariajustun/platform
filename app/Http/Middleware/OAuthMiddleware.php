<?php

/**
 * Middleware to process OAuth headers
 *
 */

namespace Ushahidi\App\Http\Middleware;

use Closure;

class OAuthMiddleware
{
    public function handle($request, \Closure $next, $scope)
    {
        return $next($request);
    }
}
