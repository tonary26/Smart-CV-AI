<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        User::create($data);

        return redirect()->route('auth.show-login');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        if (!Auth::attempt($data)) {
            return back()
                ->withInput()
                ->withErrors([
                    'error' => 'Неверная почта или пароль'
                ]);
        }

        return redirect()->route('cv.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.show-login');
    }
}
