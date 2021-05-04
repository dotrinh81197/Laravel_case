<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class AdminController extends Controller
{


    public function showLogin()
    {
        return view('auth.sign-in');
    }
    public function login(LoginRequest $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'roles' => [0, 1],
        ];
        if (!Auth::attempt($user)) {
            return redirect()->route('login')->withErrors(['login_error' => 'Tài khoản hoặc mật khẩu không đúng!',]);
        } else {
            return view('dashboard.index');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
