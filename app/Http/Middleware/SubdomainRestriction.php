<?php

namespace App\Http\Middleware;

use Closure;

class SubdomainRestriction
{
    public function handle($request, Closure $next)
    {
        $subdomain = explode('.', $request->getHost())[0];

        if ($subdomain !== 'attacker') {
            return abort(403, 'Access denied');
        }

        return $next($request);
    }
}
