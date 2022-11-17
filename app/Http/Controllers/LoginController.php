<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function connect(Request $request){
        $request = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $usercredentials = [
            'name' => $request['username'],
            'password' => $request['password']
        ];
        if(Auth::attempt($usercredentials)){
            return redirect('/admin');
        }
        else{
            return back()->with('error', 'Mauvais données de connexions');
        }
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $request = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $email = "user@server.com";
        User::create([
            'name' => $request['username'],
            'email' => $email,
            'password' => Hash::make($request['password']),
        ]);
        return view('home');

    }

    public function logout(){
        Auth::logout();
        return redirect('/home');
    }
}
