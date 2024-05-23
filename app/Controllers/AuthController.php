<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends Controller
{
    private UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showRegister()
    {
        return $this->render('register');
    }

    public function register()
    {
        $data = $this->getRequestData(['name', 'email', 'password']);

        // TODO: validate data

        try {
            $this->userModel->create($data);   
        } catch (\Exception $e) {
            return $this->redirect('register');
        }

        return $this->redirect('login');
    }

    public function showLogin()
    {
        return $this->render('login');
    }

    public function login()
    {
        [$email, $password] = array_values($this->getRequestData(['email', 'password']));
        var_dump($email);
    }
}