<?php

namespace App\Http\Middleware;

use App\Models\Site;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class hasValidApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->hasHeader('X-Api-Key') || ! $request->hasHeader('X-Api-Secret')) {
            return response('X-Api-Key or X-Api-Secret is missing in the headers', 401);
        }

        $siteApiKey = $request->headers->get('X-Api-Key');
        $siteApiSecret = $request->headers->get('X-Api-Secret');

        $site = Site::where('api_key', hash('sha256', $siteApiKey))->where('api_secret', hash('sha256', $siteApiSecret))->first();

        if (! $site) {
            return response('Invalid credentials', 401);
        }

        $request->merge(['site' => $site]);

        $site->increaseApiUsage();

        return $next($request);
    }
}
