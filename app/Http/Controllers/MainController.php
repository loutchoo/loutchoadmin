<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function redirect(){
        return to_route('home');
    }

    public function todolist(){
        return view('todolist');
    }
}
