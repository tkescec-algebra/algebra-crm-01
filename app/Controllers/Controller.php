<?php

namespace App\Controllers;

abstract class Controller
{
    protected function render(string $view, array $data = []): void
    {
        extract($data);
        require_once APP_ROOT . "/app/Views/$view.php";
    }
}