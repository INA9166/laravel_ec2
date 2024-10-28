<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        if (!$request->session()->has('name')) {
            return redirect('/');
        }
    
        $username = $request->session()->get('name');
        return view('home', compact('username'));
    }
}
