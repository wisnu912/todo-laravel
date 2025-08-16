@extends('dashboard.layouts.app')

@section('title' , 'Detail-Todolist')
@section('content')

<div class=" py-2 bg-white w-full rounded-lg p-2">

    <p class="mx-2 mb-2 bold text-md font-bold">
       Detail Todo
    </p>
    <div class="grid grid-cols-2">

        <div class="bg-gray-400 w-auto h-10 p-2 rounded-lg text-black mt-4 ">
        {{ $detail->title }}
       </div>

      <div class="mx-10 rounded-md shadow-sm w-auto">
      <img class="h-40 w-full  object-cover rounded-xl" src="{{ asset('storage/' . $detail->image ) }}" alt="">
    </div>

    </div>

        <div class="bg-gray-400 py-2  w-auto p-2 h-20 rounded-lg text-black mt-4 ">
         {{ $detail->description }}
       </div>


     <div class="w-auto bg-gray-400 p-2  py-2 mt-4 h-30 mb-10 rounded-lg text-black ">
        <ol>
        @foreach (explode("\n" ,$detail->implementasi_todo) as $item )
           <li>{{$item}}</li>
        @endforeach
        </ol>
       </div>

     <a href="{{ route('dashboard') }}">
        <button type="submit" class="rounded text-md bg-gray-400 p-2 w-40 rounded-lg cursor-pointer">
            kembali
       </button></a>
</div>
@endsection()
