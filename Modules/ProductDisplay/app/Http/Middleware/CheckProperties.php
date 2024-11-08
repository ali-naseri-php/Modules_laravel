<?php

namespace Modules\ProductDisplay\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\ProductDisplay\Livewire\KalaCategory\AllKalaWithPropertis;

class CheckProperties
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('properties')) {
dd('ali naseri php developer laravel and livewire rest full api');
            return redirect()->action(AllKalaWithPropertis::class);
        }


        return $next($request);
    }
}
