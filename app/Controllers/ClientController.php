<?php

namespace App\Controllers;

use App\Middlewares\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        Auth::isGuest();
    }

    public function index(): void
    {
        echo "Client home page";
    }
}