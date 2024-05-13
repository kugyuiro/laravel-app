<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
//追加
// use App\Http\Middleware\RoleMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //laravel11で追加必要
        // $middleware->alias([
        //     'admin' => RoleMiddleware::class
        // ])
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
