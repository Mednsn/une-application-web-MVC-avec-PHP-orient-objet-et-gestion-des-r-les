<?php
namespace App\Controllers;

use App\Core\Controller;

class AuthController
{
    public function index()
    {
        echo ' je suus dans home page';
    }
    // public function login()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
    //         header('Location: index.php?page=home');
    //     }

    //     $this->render('auth/login');
    // }

}
