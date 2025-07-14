<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login.login');
    }


  public function login(Request $request)
{
    //ambil nilai dari input
    $credentials = $request->only('email', 'password');


    //check apakah credentials ada
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }

    //return erorr jika emali dan password tidak sesuai
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->withInput();
}


}
