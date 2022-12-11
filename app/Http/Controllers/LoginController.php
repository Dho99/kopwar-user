<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->flashOnly(['username']);
        
        $user = User::where('username', $request->username)->where('password', base64_encode(base64_encode(base64_encode($request->password))))->first();
        
        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        } else {
            return back()->withErrors([
                'username' => 'Masukkan Username dengan benar !'
            ]);
        }
    }

    // public function authenticate(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $infologin = [
    //         'username' => $request->username,
    //         'password' => $request->password
    //     ];
    //     // dd($infologin);
    //     if (Auth::attempt($infologin)) {
    //         // return 'Sukses';
    //         $request->session()->regenerate();

    //         return redirect()->intended('/dashboard');
    //     }

    //     return back()->with('loginError', 'Login Failed!');
    // }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
