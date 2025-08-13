@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')


@foreach ($data as $item )
<div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-md flex items-start gap-4 hover:bg-gray-50 transition mb-6">

  <!-- Kiri: Konten ToDo -->
  <div class="flex-1">
    <h2 class="text-xl font-bold text-gray-800 hover:underline">
        <a href="{{ route('detail.todo' , $item->id) }}">
          {{ $item->title }}
        </a>
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
  <form action="{{ route('update.status' , $item->id  ) }}" method="POST">
    @csrf
    @method('PUT')
    <select name="status" onchange="this.form.submit()"  class="text-xs bg-gray-500 text-white px-2 py-1 rounded-full
focus:outline-none" >
      <option {{ $item->status == 'In Progress' ? 'selected' : '' }} value="in_progres">In Progress</option>
      <option {{ $item->status == 'Done' ? 'selected' : '' }} value="done">Done</option>
    </select>
    {{-- <button type="submit">update</button> --}}
  </form>
</div>

<form  method="POST" action="{{ route('delete' , $item->id) }}">
  @csrf
  @method('DELETE')

      <button class="bg-red-600  text-white text-xs px-3 py-1 rounded-full">Delete</button>
</form>


  <a href="{{ route('update.data' , $item->id) }}">
      <button class="bg-yellow-500  text-white text-xs px-3 py-1 rounded-full cursor-pointer">Edit Todo</button>
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

@once
    @push('script')
<script>
    document.querySelectorAll('select[name="status"]').forEach(select => {
    select.addEventListener('click', function() {
        if (this.dataset.clicked) {
            this.form.submit();
        }
    });
});
</script>
    @endpush
@endonce
@endsection
