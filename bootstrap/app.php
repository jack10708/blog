<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin.Auth' => App\Http\Middleware\AdminAuth::class,
            'client.Auth' => App\Http\Middleware\ClientAuth::class,


        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Add your exception handling logic here
    })
    ->create();

