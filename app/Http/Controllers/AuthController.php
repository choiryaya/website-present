<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {

      return view('auth.login');
    }
    public function home()
    {
      return view('auth.default');
    }
    public function register()
    {
      return view('auth.register');
    }
    public function logout()
    {

    Auth::logout();
    return redirect()->route('login');
    }
}
