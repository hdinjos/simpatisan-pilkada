<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        // Check if the user is authenticated
        if (!Auth::check()) {
            // Redirect to login or return an unauthorized response
            return redirect('/auth/admins/login');
        }

        // Get the authenticated user
        $user = Auth::user();

        // Check if the user has the required role
        if ($user->role != 'ADMIN') {
            // If the user doesn't have the required role, deny access
            return redirect('/auth/admins/login');
        }
        return $next($request);
    }
}
