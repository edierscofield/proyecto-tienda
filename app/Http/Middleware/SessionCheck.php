<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('logged_in')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
