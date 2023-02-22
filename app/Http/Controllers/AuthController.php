<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AuthController extends Controller
{
    // ============== users login / register / reset password / management ==================================================
    public function logout() 
    {
        return view('components.auth.login');
    }
    public function login() 
    {
        return view('components.auth.login');
    }
    public function forgot_password() 
    {
        return view('components.auth.forgot_password');
    }
    public function registration() 
    {
        return view('components.auth.registration');
    }


}