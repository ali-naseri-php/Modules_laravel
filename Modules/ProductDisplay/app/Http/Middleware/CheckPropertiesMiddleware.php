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
            $categoryId = $request->route('id_category');
            return redirect()->route("kala.id.properties.with",['id_category'=>$categoryId]);
        }



        return $next($request);
    }
}
