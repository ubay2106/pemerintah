<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function action_login(Request $request)
    {
        $request->validate([
            'email_admin' => 'required|email:dns',
            'password' => 'required',
        ],[
            'email_admin.required'=>'Silahkan Isi Email',
            'email_admin.email_admin'=>'Email Salah',
            'password.required'=>'Silahkan Isi Password',
        ]);

        $cek = [
            'email_admin' => $request->email_admin,
            'password' => $request->password
        ];

        if (Auth::attempt($cek)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else {
            return redirect('login')->withErrors('Email atau Password salah')->withInput();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function action_register(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'fullname' => 'required|string',
            'email_admin' => 'required|email',
            'password' => 'required|string',
        ]);

        $request['password'] = Hash::make($request['password']);

        user::create($request->all());
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
