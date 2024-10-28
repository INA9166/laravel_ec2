<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function check(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $request->session()->put('name', $request->username);

        return redirect('/home');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('name');
        
        return redirect('/');
    }
}
