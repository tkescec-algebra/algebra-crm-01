<?php

namespace App\Controllers;

use App\Models\Model;
class HomeController extends Controller
{
    public function index()
    {
        $this->render('home', ['title' => 'Algebra CRM']);
    }
}