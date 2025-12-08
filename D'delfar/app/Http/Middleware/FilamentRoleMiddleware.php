<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilamentRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if (! in_array($user->role, ['admin', 'staff'])) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
