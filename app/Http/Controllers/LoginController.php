<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => ['required' ,'email'],
            'password' => ['required']
        ], [
            'email.required' => 'email wajib di isi',
            'email.email' => 'email harus example@gmail.com',
            'password' => 'password wajib di isi'
        ]);


     dd($request->all());

    }

}
