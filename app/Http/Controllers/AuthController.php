<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Permissions\ProductPermissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignInPage()
    {
        // $user = auth()->user();

        return view('auth.sign-in');
    }

    public function showRegisterPage()
    {
        return view('auth.register');
    }

    public function signIn(Request $request)
    {


        $user = [
            'email' => $request->email,
            'password' => $request->password,

        ];


        if (Auth::attempt($user)) {
            $role = Auth::user()->roles;

            if ($role == 0) {
                // abort(403);
                $customer = Auth::user();

                return view('index', compact('customer'));
            } else {
                return redirect()->route('dashboard.index');
            }
        } else {

            return redirect()->route('login')->with('loginError', 'Email or Password wrong');
        }

        return route('dashboard.index');
    }

    public function signOut()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function register(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $name = $request->full_name;

        $user = new User();
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->name = $name;

        $user->save();

        return route('login');
    }
}
