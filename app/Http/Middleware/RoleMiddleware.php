<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // BELUM LOGIN
        if (!Auth::check()) {

            return redirect('/');
        }


        // ROLE TIDAK SESUAI
        if (!in_array(Auth::user()->role, $roles)) {

            abort(403);
        }


        return $next($request);
    }
}