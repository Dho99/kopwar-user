<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }
    function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'Us'
        ])
    }
}
