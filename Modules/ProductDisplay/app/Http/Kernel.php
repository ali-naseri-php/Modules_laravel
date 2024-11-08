<?php

namespace Modules\ProductDisplay\Http;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Routing\Router;

class Kernel extends HttpKernel
{

    protected $middlewareGroups = [
        'web' => [
            'check.properties' => \Modules\ProductDisplay\Http\Middleware\CheckPropertiesMiddleware::class
        ],
    ];

    protected $routeMiddleware = [
        'check.properties' => \Modules\ProductDisplay\Http\Middleware\CheckPropertiesMiddleware::class,
    ];
}
