<nav class="bg-white text-sky-700 shadow-md">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">

    <!-- Kiri: Logo / Judul -->
    <div class="flex items-center space-x-4">
      <h1 class="text-xl font-bold">📋 Todolist</h1>
    </div>

    <!-- Tengah: Search kecil -->
    @unless (Request::is('dashboard'))
      <div class="flex-1 mx-6">
      <input
        type="text"
        placeholder="Cari..."
        class="w-48 px-3 py-1.5 rounded-md text-sm border border-gray-300 focus:outline-none focus:ring-1 focus:ring-sky-400"
      />
    </div>

    @endunless


    <!-- Kanan: Menu + Avatar -->
    <div class="flex items-center space-x-4">
        @if(Request::is('dashboard'))
      <a href="{{ route('create') }}" class="text-sm hover:text-sky-500 transition">Create</a>
        @endif
      <a href="{{ route('logout') }}" class="text-sm hover:text-sky-500 transition">Logout</a>
      <a href="#">
        <img
          src="https://i.pravatar.cc/40"
          alt="Profile"
          class="w-9 h-9 rounded-full border border-gray-300 hover:ring-2 hover:ring-sky-400 transition"
        />
      </a>
    </div>

  </div>
</nav>
