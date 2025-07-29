@extends('dashboard.layouts.app')


@section('title' , 'create-page-todo')
@section('content')


  <form action="{{ route('store') }}" method="post" class="block bg-gray-200 p-3 mx-3
   mx-50 shadow-lg rounded-xl ">
   @csrf

   <div class="grid grid-cols-2 ">

     <div>
          <div class="mb-4">
         <label for="title" class="m-2 text-lg text-black block font-bold">Title</label>
        <input type="text" name="title" id="title"
        class="@error('title') is-invalid @enderror rounded-lg p-2 w-80 bg-white
        shadow-lg" value="{{ old('title') }}">

       @error('title')
           <p class="text-red-400 mb-2 mt-2 ">{{$message}}</p>
       @enderror
        </div>
     </div>
          <div class="mb-4 mx-2 ">
            <label for="image"  class="m-2 text-lg text-black block font-bold" >Image</label>
            <input type="file" name="image"
            class="
            rounded-lg p-2 w-80 bg-white shadow-lg" value="{{ old('image')}}">
            @error('image')
            <p class="text-red-400 mb-2 ">{{$message}}</p>
        @enderror
            </div>

   </div>


        <div class="mb-4">
         <label for="description"  class="m-2 text-lg text-black font-bold" >Description</label>
         <textarea name="description" id="description"
          cols="10" rows="10"   class=" @error('description') is-invalid @enderror  rounded-lg p-2 w-100 bg-white shadow-lg
          resize-X w-full h-32" value="{{ old('description') }}"></textarea>
          @error('description')
           <p class="text-red-400 mb-2" >{{$message}}</p>
       @enderror
        </div>

         <div class="mb-4">
         <label for="implementasi_todo"  class="m-2 text-lg text-black font-bold" >implementasi Todo</label>
         <textarea name="implementasi_todo" id="implementasi_todo"
          cols="10" rows="10"   class=" @error('implementasi_todo') is-invalid @enderror  rounded-lg p-2 w-100 bg-white shadow-lg
          resize-X w-full h-32" value="{{ old('implementasi_todo') }}"></textarea>
          @error('description')
           <p class="text-red-400 mb-2" >{{$message}}</p>
       @enderror
        </div>


        <button class="w-full bg-sky-500 rounded-lg p-2 mb-8 mt-2
        cursor-pointer hover:bg-sky-400  ">
            Create
        </button>

     </form>

@endsection()
