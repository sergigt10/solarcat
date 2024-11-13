<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
    */

    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}