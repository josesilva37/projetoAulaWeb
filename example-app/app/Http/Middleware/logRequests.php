<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class logRequests
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
        Storage::disk('local')->append('example.txt', $request->__toString());

        return $next($request);

    }
}
