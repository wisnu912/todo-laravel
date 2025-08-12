@extends('dashboard.layouts.app')

@section('title' , 'update-profile')
@section('content')
<div class="bg-sky-300 rounded-md shadow-lg mt-10 h-auto  m-2 ">

    <form action="" method="post" enctype="multipart/form-data" class="py-2 mx-2 p-4">
         <div>
            <label for="image" class="text-xl block mt-4 font-mono ">Image</label>
            <input type="file" name="image" id="image" class="bg-white rounded-md w-full
            p-3 shadow-lg mb-4 mt-2">
         </div>

          <div>
            <label for="username" class="text-xl block mt-4 font-mono" >Username</label>
            <input type="text" name="username" id="username" class="bg-white rounded-md w-full
            p-3 shadow-lg mb-4 mt-2">

         </div>

          <div>
            <label for="email" class="text-xl block mt-4 font-mono">Email</label>
            <input type="email" name="email" id="email" class="bg-white rounded-md w-full
            p-3 shadow-lg mb-10 mt-2" >
         </div>

        <button type="submit" class="rounded text-center text-md text-white  shadow-md bg-black p-2 mx-2 w-42
        mb-2 cursor-pointer hover:bg-gray-600">
            Update
        </button>
    </form>
</div>
@endsection()

