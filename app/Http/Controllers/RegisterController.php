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
             'password' => ['required','confirmed','min:8'],
             'password_confirmation' => ['required'],

           ] , [
             'username.required' => 'username wajib di isi',
             'username.max' => 'username maximal 22 karakter',
             'email.required' => 'email wajib di isi',
             'email.email' =>  'email harus @example.gmail.com',
             'password.required' => 'password wajib di isi',
             'password.min' => 'password minimal 8 karakter',
             'password.confirmed' => 'confrim password tidak sesuai',
             'password_confirmation' => 'confrim passsword wajib di isi'
           ]);


           dd($request->all());



    }
}
