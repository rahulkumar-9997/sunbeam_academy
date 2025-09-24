<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BranchDomainRedirectMiddleware
{
   private $branchDomainMapping = [
        'sunbeamacademy.inforbit.in' => 'https://sunbeamacademysmn.inforbit.in/', 
        'sunbeamacademydkd.com' => 'https://sunbeamacademydkd.com/',
        'sunbeamacademysrn.com' => 'https://sunbeamacademysrn.com/',
        'sunbeamacademykp.com' => 'https://sunbeamacademykp.com/',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->getHost() === 'sunbeamacademy.inforbit.in' && $request->path() === '/') {
            return $next($request);
        }
        return $next($request);
    }

}