<?php

namespace App\Http\Middleware;

use Closure;

class Charset
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $contentType = $response->headers->get('Content-Type');
        if (!empty($contentType)) {
            $response->header('Content-Type', str_replace('UTF-8', 'UTF-8', $contentType));
        }
        return $response;
    }
}