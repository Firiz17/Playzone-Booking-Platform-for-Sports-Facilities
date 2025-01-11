<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = Auth::user();

        if ($user && $user->role !== $role) {
            // If the user does not have the required role, redirect them
            return redirect('signUp.create')->with('error', 'You do not have access to this page.');
        }
        return $next($request);
    }
}
