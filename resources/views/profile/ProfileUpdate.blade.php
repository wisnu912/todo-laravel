@extends('dashboard.layouts.app')

@section('title' , 'update-profile')
@section('content')
<div class="bg-teal-300 rounded-md shadow-lg mt-10 h-auto  m-2 ">

    <form action="{{ route('profile.proses' , auth()->user()->id) }}" method="post"
         enctype="multipart/form-data" class="py-2 mx-2 p-4">
          @csrf
         @method('put')

         <div>
            <label for="image" class="text-xl block mt-4 font-mono ">Image</label>
            <input type="file" name="image" id="image" class="bg-white rounded-md w-full
            p-3 shadow-lg mb-4 mt-2 "@error('image') is-invalid @enderror"
            value="{{ old('image') }}">

            @error('image')
             <p class="text-red-500  text-xl">{{$message}}</p>
            @enderror
         </div>

          <div>
            <label for="username" class="text-xl block mt-4 font-mono" >Username</label>
            <input type="text" name="username" id="username" class="bg-white rounded-md w-full
            p-3 shadow-lg mb-4 mt-2 @error('username') is-invalid @enderror" value="{{ auth()->user()->username }} {{ old('username') }}">

            @error('username')
             <p class="text-red-500 text-xl">{{$message}}</p>
            @enderror
         </div>

          <div>
            <label for="email" class="text-xl block mt-4 font-mono">Email</label>
            <input type="email" name="email" id="email" class="bg-white rounded-md w-full
            @error('email') is-invalid @enderror p-3 shadow-lg mb-10 mt-2" value="{{ auth()->user()->email }} {{ old('image')
            }}">
            @error('email')
             <p class="text-red-500 mb-0 mt-0 text-xl">{{$message}}</p>
            @enderror
         </div>

         <div class="flex ">

      <button type="submit" class="rounded text-center text-md text-white
      shadow-md bg-black p-2 mx-2 w-42
        mb-2 cursor-pointer hover:bg-gray-900">
            Update
        </button>

         <button type="submit" class="rounded text-center text-md
         text-black  shadow-md bg-yellow-500 p-2 mx-2 w-42
        mb-2 cursor-pointer hover:bg-yellow-600">
        <a href="{{ route('profile' , auth()->user()->id) }}">
       Kembali
        </a>

        </button>
         </div>


    </form>
</div>
@endsection()

