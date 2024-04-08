<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Worker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try{
            if (auth()->user()->role == 'worker') {
                return $next($request);
            }else{
                return redirect()->back();
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());

        }
    }
}
