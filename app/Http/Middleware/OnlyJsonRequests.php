<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyJsonRequests
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $acceptHeader = $request->header('Accept');

        if ($acceptHeader !== 'Application/Json') {
            return response()->json(['success' => false, 'errMsg' => 'Only json type data is accepted']);
        }

        return $next($request);
    }
}
