<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Asegúrate de importar la clase Session

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = auth()->user();

        if ($user && in_array($user->role, $roles)) {
            return $next($request);
        }

        Session::flash('error', 'Você não tem permissão para acessar esta página.'); // Mensaje flash
// 
        return redirect()->route('dashboard');
    }
}
