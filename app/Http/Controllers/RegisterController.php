<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
       return view('pages.register');
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5|max:255'
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);
       User::create($validatedData);
       return redirect('/mahasiswa')->with('success','register suceesss please login');
    }

    }

