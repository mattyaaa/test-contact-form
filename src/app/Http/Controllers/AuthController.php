<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        $user['password'] = Hash::make($user['password']);
        User::create($user);
        return redirect('/login')->with('success', '登録が完了しました。ログインしてください。');;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)) {
            return redirect('/admin');
        }
        return back()->withErrors(['email' => 'メールアドレスまたはパスワードが違います']);
    }

    public function admin()
    {
        return view('admin');
    }
}
