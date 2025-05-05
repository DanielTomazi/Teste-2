<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MethodNotAllowedHttpExceptionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            return $next($request);
        } catch (MethodNotAllowedHttpException $e) {
            return redirect('/error-post');
        }    }
}
