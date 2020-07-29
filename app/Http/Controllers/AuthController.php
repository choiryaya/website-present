<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{

    public function login()
    {
       
      return view('admin.template.login');
    }
    public function home() 
    {
      return view('admin.template.default');
    }
    public function register()
    {
      return view('admin.template.register');
    }
}