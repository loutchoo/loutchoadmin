<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function home(){
        return view('createactivity');
    }

    public function store(Request $request){
        $request->validate([
            'language' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        Activity::create([
            'language' => $request['language'],
            'title' => $request['title'],
            'description' => $request['description'],
        ]);
        return back()->with('success', "Your new activity has been added to your Todolist !");
    }

    public function show($id){
        $activity = Activity::findOrFail($id);
        return view('showactivity')->with([
            'activity' => $activity,
        ]);
    }
}
