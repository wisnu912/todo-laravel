<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $count_todo = User::withCount('planing')->find($id);
        return view('profile.Profile' ,  ['count_todo' => $count_todo]);
    }

    public function edit(){
         return view('profile.ProfileUpdate');
    }
}
