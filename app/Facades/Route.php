<?php

namespace App\Facades;

use App\Router;

class Route
{
    public static function get(string $path, string $controller, string $action): void
    {
        Router::getInstance()->get($path, $controller, $action);
    }

    public static function post(string $path, string $controller, string $action): void
    {
        Router::getInstance()->post($path, $controller, $action);
    }

    public static function dispatch(): void
    {
        Router::getInstance()->dispatch();
    }
}