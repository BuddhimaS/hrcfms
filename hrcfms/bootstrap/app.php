<?php

use App\Http\Middleware\CleaningStaffMiddleware;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\MarketingStaffMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\FrontDeskOfficerMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
        'Admin'=>AdminMiddleware::class,
        'FrontDeskOfficer'=>FrontDeskOfficerMiddleware::class,
        'Guest'=>GuestMiddleware::class,
        'CleaningStaff'=>CleaningStaffMiddleware::class,
        'MarketingStaff'=>MarketingStaffMiddleware::class,
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
