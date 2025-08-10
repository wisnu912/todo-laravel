@extends('dashboard.layouts.app')

@section('title' , 'Edit Todo')
@section('content')

<div class="bg-gray-400 shadow rounded-xl p-3 mx-3
   mx-50">
<form action="{{ route('proses.update' , $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
   <div class="grid grid-cols-2">
     <div class="mb-4 px-4 py-4">
     <label  class="m-2 text-lg text-black font-bold block"for="title">Title</label>
    <input class=" @error('description') is-invalid @enderror  rounded-lg bg-white p-2 w-full shadow-md " type="text" name="title"
    id="title" value=" {{ $data->title }}">

      @error('title')
           <p class="text-red-600  mb-2" >{{$message}}</p>
       @enderror
    </div>

<div class="mb-4 px-4 py-4" >
   <label   class="m-2 text-lg text-black font-bold block"  for="image">image</label>
    <input class="rounded-lg bg-white w-full p-2 w-75 shadow-md " type="file"
    name="image" id="image">
</div>


   </div>


   <div class="mb-4">
         <label for="description"  class="m-2 text-lg text-black font-bold block" >Description</label>
         <textarea name="description" id="description"
          cols="10" rows="10"   class=" @error('description') is-invalid @enderror  rounded-lg p-2 w-100 bg-white shadow-lg
          resize-X w-full h-32" value="{{ old('description') }}">{{ $data->description }}</textarea>
          @error('description')
           <p class="text-red-600  mb-2" >{{$message}}</p>
       @enderror
        </div>

   <div class="mb-4">
         <label for="implementasi_todo"  class="m-2 text-lg text-black font-bold" >implementasi Todo</label>
         <textarea name="implementasi_todo" id="implementasi_todo"
          cols="10" rows="10"   class=" @error('implementasi_todo') is-invalid @enderror  rounded-lg p-2 w-100 bg-white shadow-lg
          resize-X w-full h-32" value="{{ old('implementasi_todo') }}">{{ $data->implementasi_todo }}</textarea>
          @error('description')
           <p class="text-red-600  mb-2" >{{$message}}</p>
       @enderror
        </div>

 <div class="grid grid-cols-2">

         <button class="w-80 bg-yellow-500 rounded-lg p-2  mt-2
        cursor-pointer hover:bg-yellow-400  ">
            Update
        </button>

        <button class=" bg-red-500 rounded-lg p-2  mt-2
        cursor-pointer hover:bg-red-600   ">
         <a href="{{ route('dashboard') }}">
            Kembali
         </a>
        </button>
        </div>

</form>


</div>


@endsection()
