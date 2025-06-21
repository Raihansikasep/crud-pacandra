<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFondation\Response;

class Admin
{
    
    public function handle(Request $request, Closure $next) 
    {
        if (Auth::user()->isAdmin == 1) {
            return $next($request);
        } else {
            return abort(403);
        }
    }
}
