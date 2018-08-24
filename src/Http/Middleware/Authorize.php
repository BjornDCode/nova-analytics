<?php

namespace BjornDCode\NovaAnalyticsTool\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use BjornDCode\NovaAnalyticsTool\AnalyticsTool;
use Symfony\Component\HttpFoundation\Response;

class Authorize
{
    public function handle(Request $request, Closure $next): Response
    {
        return app(AnalyticsTool::class)->authorize($request)
            ? $next($request)
            : abort(403);
    }
}
