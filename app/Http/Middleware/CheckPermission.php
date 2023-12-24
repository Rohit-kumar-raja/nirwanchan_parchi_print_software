<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controllers\Middleware;

class CheckPermission
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
        if (Auth::user() == '') {
            return redirect()->route('login');
        } else {
            if (Auth::user()->type == 'superadmin') {
                return $next($request);
            } else {
                return $next($request);

            //     $route_name =  $request->route()->getName();
            //     if (check_permission($route_name)) {
            //         return $next($request);
            //     } else {
            //         if ($route_name != "clincs.index") {
            //             return redirect()->route('clinics.index');
            //         }
            //         return  redirect()->back()->with('delete', 'You Do not have permission to access this route');
            //     }
            }
        }
    }
}
