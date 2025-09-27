<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BranchDomainRedirectMiddleware
{
	public function handle(Request $request, Closure $next): Response
    {
        if ($request->getHost() === 'sunbeamacademy.com' && $request->path() === '/') {
            return $next($request);
        }
        return $next($request);
    }

}