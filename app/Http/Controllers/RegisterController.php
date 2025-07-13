<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.register');
    }

    public function store(Request $request)
    {

        //validation
           $request->validate([
             'username' => ['required' , 'max:22' , 'string'],
             'email' => ['required' , 'email' , 'string'],
             'password' => ['required','confirmed','min:8'],
             'password_confirmation' => ['required'],

           ]
           // custom erorr validation
           , [
             'username.required' => 'username wajib di isi',
             'username.max' => 'username maximal 22 karakter',
             'email.required' => 'email wajib di isi',
             'email.email' =>  'email harus @example.gmail.com',
             'password.required' => 'password wajib di isi',
             'password.min' => 'password minimal 8 karakter',
             'password.confirmed' => 'confrim password tidak sesuai',
             'password_confirmation' => 'confrim passsword wajib di isi'
           ]);

           $user = User::create([
              'username' => $request->username,
              'email' => $request->email,
            'password' => Hash::make($request->password)

           ]);
           $user->save();

         return redirect()->route('login-page');
    }
}
