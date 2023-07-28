<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     // This Middleware For check Admins..
     public function handle($request, Closure $next)
     {
        if (!Auth::guard('admin')->check())
        {

            return Redirect('admin/login')->with('msg', 'please log in ...');
        }

        return $next($request);
     }
    }
