<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle($request, Closure $next)
    {
        $startTime = microtime(true);
        $response = $next($request);
        $endTime = microtime(true);
        $duration = $endTime - $startTime;

        // Log request details and duration
        Log::info("Request: {$request->method()} {$request->path()} | Duration: {$duration} seconds");

        return $response;
    }
}
