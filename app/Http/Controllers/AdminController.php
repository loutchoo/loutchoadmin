<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        $user = Auth::user();
        $connected = 1;
        
        
        if (Auth::check()) {
            return view('admin')->with([
                'user' => $user,
                'connected' => $connected,
            ]);
        }
        else{
            return redirect()->route('login');
        }
    }
}
