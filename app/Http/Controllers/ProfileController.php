<?php

namespace App\Http\Controllers;

use App\Models\planing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($id){
        $count_todo = User::withCount('planing')->find($id);
        return view('profile.Profile' ,  ['count_todo' => $count_todo]);
    }

    public function edit(){
         return view('profile.ProfileUpdate');
    }

    public function update(Request $request ,  $id){

       $request->validate([
        'username' => ['required' , 'max:20' ],
        'email'    => ['email' , 'required'],
        'image'    => ['image' , 'mimes:png,jpg,jpeg' , 'max:2048']
       ] ,

       [
        'username.required' => 'username tidak boleh kosong',
        'username.max'  => "username melebih batas karakter",
        'email.email' => "email harus bertipe @",
        'email.required' => 'email tidak boleh kosong',
        'image.mimies' => 'image tidak sesuai dengan tipe',
        'image.max' => 'ukuran file terlalu besar'
       ]
    );


        $user = User::findOrFail($id);
        if($request->file('image')){

            $file = $request->file('image');
            $fileName = $file->hashName();
            $file->storeAs('profile' , $fileName , 'public');
            $path = 'profile/' . $fileName;

            $user->username = $request->username;
            $user->email = $request->email;
            $user->image = $path;
            $user->save();
        }else{
            $user->username = $request->username;
            $user->email = $request->email;
            $user->save();
        }

       return redirect()->route('profile' , $id);
    }


    public function delete($id){

        $user = User::findOrFail($id);
        $user->planing()->delete();
        $user->delete();

        return redirect()->route('/');
    }


    public function search(Request $request){

        $cari = $request->cari;

       $todo = planing::where('title' , "like" , "%" . $cari . "%")->with('users')
       ->where('users_id' , Auth::id())->get();

        return view('Crud.TodoDetailUser' , ['todo' => $todo]);

    }
}
