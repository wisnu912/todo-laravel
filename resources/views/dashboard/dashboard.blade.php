@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')


@foreach ($data as $item )
<div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-md flex items-start gap-4 hover:bg-gray-50 transition mb-6">

  <!-- Kiri: Konten ToDo -->
  <div class="flex-1">
    <h2 class="text-xl font-bold text-gray-800 hover:underline">
     {{ $item->title }}
    </h2>

    <p class="text-md text-gray-800 mt-1 mx-8 ">
      {{ $item->description }}
    </p>

    <!-- Info Bar -->
    <div class="flex items-center text-xs text-gray-500 mt-4 gap-4 flex-wrap">
      <span class="bold text-black text-sm">📅 Dibuat:
        {{$item->created_at->isoFormat('dddd, D MMM Y')}}

        <div class="w-30 mt-4 mx-2">
         <p class="bg-gray-400  text-black bold text-md px-3 py-1 rounded-full">
            Status : {{ $item->status }}
        </p>
        </div>


    </span>


      <div class="ml-auto flex items-center gap-2">



<div class="ml-auto flex items-center gap-2">

  <!-- Dropdown Status -->
  <form action="" method="POST">
    @csrf
    @method('PUT')
    <select name="status"
      class="text-xs bg-gray-500 text-white px-2 py-1 rounded-full
      focus:outline-none">
      <option {{ $item->status == 'Pending' ? 'selected' : '' }} value="Pending">Pending</option>
      <option {{ $item->status == 'In Progress' ? 'selected' : '' }} value="In Progress">In Progress</option>
      <option {{ $item->status == 'Done' ? 'selected' : '' }} value="Done">Done</option>
    </select>
  </form>
</div>

<form  method="POST" action="">
  @csrf
  @method('DELETE')


  <a href="">
      <button class="bg-red-600  text-white text-xs px-3 py-1 rounded-full">Delete</button>
  </a>
</form>


  <a href="">
      <button class="bg-yellow-500  text-white text-xs px-3 py-1 rounded-full">Edit Todo</button>
  </a>

      </div>
    </div>
  </div>

  <!-- Kanan: Thumbnail -->
  <div class="w-32 h-24 flex-shrink-0">

<img src="{{ asset('storage/' . $item->image) }}"
     alt="Todo Thumbnail"
     class="w-full h-full object-cover rounded-lg" />

  </div>
</div>


@endforeach


<div  class="mx-10 mt-0">
{{ $data->links('pagination::tailwind') }}
</div>
@endsection
