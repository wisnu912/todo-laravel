<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.register');
    }

    public function store(Request $request)
    {
           $request->validate([
             'username' => ['required' , 'max:22' , 'string'],
             'email' => ['required' , 'email' , 'string'],
             'password' => ['required' , 'min:8'],

           ] , [
             'username.required' => 'username wajib di isi',
             'username.max' => 'username maximal 22 karakter',
             'email.required' => 'email wajib di isi',
             'email.email' =>  'email harus @example.gmail.com',
             'password.required' => 'password wajib di isi',
             'password.min' => 'password minimal 8 karakter'
           ]);


           dd($request->all());



    }
}
