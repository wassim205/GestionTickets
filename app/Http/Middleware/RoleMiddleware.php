<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();
        // dd($user->role->name);
        if (!$user || $user->role->name !== $role) {
            // redirect('/login');
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
