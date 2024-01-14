<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // login page
    public function login()
    {
        return view('auth.login');
    }
    // dologin
    public function doLogin(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        // dd($validate);
        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return 'login gagal masseh';
    }
    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
