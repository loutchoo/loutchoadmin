<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function changepassword(Request $request){
        $request->validate([
            'newpassword' => 'required',
            'newpassword2' => 'required'
        ]);
        if($request->newpassword == $request->newpassword2){
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->newpassword)
            ]);
            return back()->with('status', 'Password successfully changed !');
        }
        else{
            return back()->with('error', "The 2 new passwords aren't matching");
        }
    }
}
