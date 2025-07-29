<?php

namespace App\Http\Controllers;

use App\Models\planing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

   // show page  dashboard
    public function index()
    {
        return view('dashboard.dashboard');
    }


    // logout
    public function logout(Request $request)
    {
         Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login-page');
    }

   // show page create
    public function create()
    {
        return  view('Crud.CreateTodo');
    }


    public function store(Request $request)
    {

        //Validate Data
       $request->validate([
           'title' => ['required' , 'string' , 'max:50'],
           'description' => ['required'  , 'max:255'],
           'image' => ['mimes:png,jpg,jpeg'],
           'implementasi_todo' => ['required' , 'max:255' , 'string']
       ], [
          'title.required' => 'title wajib di isi',
          'title.string' => 'title hanya boleh string',
          'description.required' => 'description tidak boleh kosong',
          'description.max' => 'description melebihi batas karakter',
          'implementasi_todo' => 'implementasi tidak boleh kosong',
          'implementasi_todo' => 'implementasi melebihi batas karakter',
          'implementasi_todo' => 'tipe tidak sesuai implementasi'
       ]);
    }
}
