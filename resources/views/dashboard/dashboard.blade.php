@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow-md flex items-start gap-4 hover:bg-gray-50 transition mb-6">

  <!-- Kiri: Konten ToDo -->
  <div class="flex-1">
    <div class="text-sm text-gray-500 mb-1">
      📂 Kategori: <span class="font-medium text-black">Produktivitas</span>
    </div>

    <h2 class="text-xl font-bold text-gray-800 hover:underline">
      Belajar Tailwind + Buat Layout Todo
    </h2>

    <p class="text-sm text-gray-600 mt-1">
      Menyusun ulang UI todo list agar terlihat profesional seperti artikel teknologi modern.
    </p>

    <!-- Info Bar -->
    <div class="flex items-center text-xs text-gray-500 mt-4 gap-4 flex-wrap">
      <span>📅 Dibuat: 14 Juli 2025</span>
      <span>🔥 Prioritas: Tinggi</span>

      <div class="ml-auto flex items-center gap-2">
        <button class="bg-green-500 hover:bg-green-600 text-white text-xs px-3 py-1 rounded-full">
          ✅ Selesai
        </button>
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
    <img src="https://via.placeholder.com/128x96" alt="Todo Thumbnail"
      class="w-full h-full object-cover rounded-lg" />
  </div>
</div>
    


@endsection
