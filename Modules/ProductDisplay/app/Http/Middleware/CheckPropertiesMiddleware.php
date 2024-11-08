<?php

namespace Modules\ProductDisplay\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\ProductDisplay\Livewire\KalaCategory\AllKalaWithPropertis;

class CheckPropertiesMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('properties')) {
            $categoryId = $request->route('id');
            return redirect()->route("kala.id.properties.with",['id'=>$categoryId]);
        }



        return $next($request);
    }
}
