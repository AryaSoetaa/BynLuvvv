<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
{
    if (!$request->user()->hasRole($role)) {
        \Log::info('Access denied for user: ', ['id' => $request->user()->id, 'role' => $role]);
        abort(403, 'Unauthorized');
    }
    return $next($request);
}

}