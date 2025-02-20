<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::user()->role->name;
                // dd($role);
                if ($role == 'admin') {
                    return redirect('admin.dashboard');
                } elseif ($role == 'agent') {
                    return redirect('agent.dashboard');
                } elseif($role == 'user') {
                    return redirect('client.dashboard');
                }
                // return redirect(Rout:eServiceProvider::HOME)->with('error', 'You are not authorized to access this page');
            }
        }

        return $next($request);
    }
}
