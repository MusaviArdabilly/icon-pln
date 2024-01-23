<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register.index');
    }

    public function login() {
        return view('auth.login');
    }

    public function login_post(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Masukkan email dengan benar',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'captcha.required' => 'Captcha tidak boleh kosong',
            'captcha.captcha' => 'Captcha salah',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/')->with('success', 'Login Berhasil');
        }
        return redirect()->back()->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function reload_captcha() {
        return response()->json(['captcha_url' => captcha_src()]);
    }
}
