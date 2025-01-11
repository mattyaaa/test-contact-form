<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
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
        return redirect()->route('login')->with('success', '登録が完了しました。ログインしてください。');;
    }
}
