<?php

namespace App\Http\Controllers;

use App\Models\planing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

   // show page  dashboard
    public function index()
    {

       $data = planing::where('users_id', Auth::id())->paginate(2);
        return view('dashboard.dashboard' , compact('data'));
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


        $file = $request->file('image');
        $fileName = $file->hashName();
        $file->storeAs('image', $fileName, 'public');

        $imagePath = 'image/' . $fileName;
        $user_id = Auth::id();

      planing::create([
         'title' => $request->title,
         'description' => $request->description,
         'implementasi_todo' => $request->implementasi_todo,
         'image' => $imagePath,
         'users_id' => $user_id
       ]);

       return redirect()->route('dashboard');
    }


    public function edit($id){
        $data = planing::findOrFail($id);

        return view('Crud.EditTodo' , compact('data'));
    }

    public function update(Request $request , $id){

        $request->validate([
           'title' => ['required' , 'string' , 'max:50'],
           'description' => ['required'  , 'max:255'],
           'image' => ['mimes:png,jpg,jpeg'],
           'implementasi_todo' => ['required' , 'max:255' , 'string']
       ], [
          'title.required' => 'title wajib di isi',
          'title.string' => 'title hanya boleh string',
          'description.required' => 'description tidak boleh kosong',
          'implementasi_todo' => 'implementasi tidak boleh kosong',
          'implementasi_todo' => 'implementasi melebihi batas karakter',
          'implementasi_todo' => 'tipe tidak sesuai implementasi'
       ]);



         $planing = planing::findOrFail($id);

       if($request->file('image')){

        $file = $request->file('image');
        $fileName = $file->hashName();
        $file->storeAs('image', $fileName, 'public');
         $imagePath = 'image/' . $fileName;

        $planing->title = $request->title;
        $planing->description = $request->description;
        $planing->implementasi_todo = $request->implementasi_todo;
        $planing->image =  $imagePath ;
        $planing->save();
       }else{

        $planing->title = $request->title;
        $planing->description = $request->description;
        $planing->implementasi_todo = $request->implementasi_todo;
        $planing->save();
       }

        return redirect()->route('dashboard');
    }


    public function delete($id){

     $planing  = planing::findOrFail($id);
     $planing->delete();

      return redirect()->route('dashboard');
    }


    public function show($id){

        $detail = planing::findOrFail($id);
        return view('Crud.ShowTodo' , ['detail' => $detail]);

    }
}
