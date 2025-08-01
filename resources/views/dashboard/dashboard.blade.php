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

    <p class="text-sm text-gray-600 mt-1">
      {{ $item->description }}
    </p>

    <!-- Info Bar -->
    <div class="flex items-center text-xs text-gray-500 mt-4 gap-4 flex-wrap">
      <span class="bold text-black text-sm">📅 Dibuat: {{$item->created_at->format(' j M  , y')}}</span>

      <div class="ml-auto flex items-center gap-2">
        <p class="bg-green-500 hover:bg-green-600 text-black text-xs px-3 py-1 rounded-full">
            Status : {{ $item->status }}
        </p>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs px-3 py-1 rounded-full">
          ✏️ Edit
        </button>
        <button class="bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded-full">
          🗑️ Hapus
        </button>
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
