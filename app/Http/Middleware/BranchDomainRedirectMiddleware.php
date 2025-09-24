<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BranchDomainRedirectMiddleware
{
    private $branchDomainMapping = [
        'sunbeamacademysmn.com' => 'sunbeam-academy-samneghat',
        'sunbeamacademydkd.com' => 'sunbeam-academy-durgakund',
        'sunbeamacademysrn.com' => 'sunbeam-academy-sarainandan', 
        'sunbeamacademykp.com' => 'sunbeam-academy-knowledge-park',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $currentHost = $request->getHost();
        if (array_key_exists($currentHost, $this->branchDomainMapping) && $request->path() === '/') {
            $branchRoute = $this->branchDomainMapping[$currentHost];
            $mainDomain = 'https://sunbeamacademy.com';
            
            return redirect()->away($mainDomain . '/branches/' . str_replace('-', '/', $branchRoute));
        }
        
        return $next($request);
    }
}