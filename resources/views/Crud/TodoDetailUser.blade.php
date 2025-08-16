@extends('dashboard.layouts.app')

@section('title' , 'Todo-User')
@section('content')

<div class="overflow-x-auto">


    <form action="{{ route('cari.data') }}" class="flex mb-6" method="get">
        <P class="text-lg font-bold">Search</P>
        <input type="text" name="cari" placeholder="Cari" class="mx-2 w-92 p-2
        shadow rounded-lg
        bg-white ">
    </form>
  <table class="min-w-full divide-y divide-gray-200 border">
    <thead class="bg-gray-50">
      <tr>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500
        uppercase tracking-wider">Title</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Dibuat</th>
        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
      </tr>
    </thead>

    @foreach ($todo  as $item )
  <tbody class="bg-white divide-y divide-gray-200">
      <!-- Loop data user -->
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{$item->title}}</td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
            {{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
        <td class="px-6 py-4 whitespace-nowrap">
          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
           {{ $item->status }}
          </span>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
          <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm">
            Lihat Detail
          </button>
        </td>
      </tr>

    </tbody>
    @endforeach

  </table>
</div>

@endsection()
