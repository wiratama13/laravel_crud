<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return redirect('/mahasiswa');
        }else{
            return view('pages.login');
        }
    }

    public function store(Request $request)
    {
        $credentials = $request->validate(
        [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::Attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/mahasiswa');
        }
            return back()->with('loginErrors','login Failed');

    }
        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login');
        }
    }

